<?php
/*Создать страницу, на которой можно загрузить несколько фотографий в галерею. Все загруженные фото должны
помещаться в папку gallery и выводиться на странице в виде таблицы.*/


define('used_type',[
    'image/png'=>'png',
    'image/jpeg'=>'jpg'
]);

function save_name($data){
    return file_put_contents('image_name.txt',serialize($data));
}
function get_name(){
    return unserialize(file_get_contents('image_name.txt'));
}

if (file_exists('image_name.txt')){
    $result=get_name();
}

$form_was_send=false;
if (isset($_POST['submit'])) {
    $form_was_send = true;
    if (is_dir('gallery') == false) {
        if (mkdir('gallery') == false) {
            throw new Error('Didnt create folder;');
        };
    }
//    echo "<pre>";
//    var_dump($_FILES);
//    echo "</pre>";
    foreach ($_FILES["photo"]["error"] as $key => $error) {
        if ($error == UPLOAD_ERR_OK) {
            $allow_type = used_type[$_FILES['photo']['type'][$key]];
            if (!isset($allow_type)) {
                throw new Error('PLEASE IMAGE;');
            }
            $tmp_name = $_FILES["photo"]["tmp_name"][$key];
            $name = $_FILES["photo"]["name"][$key] . time();
            move_uploaded_file($tmp_name, 'gallery' . DIRECTORY_SEPARATOR . $name);
        } else {
            throw new Error('PLEASE select file;');
        }
        $result[] = $name;
    }
    save_name($result);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task 6</title>
</head>
<body>
<div>
    <form method="post" enctype="multipart/form-data">
        <div>
            <label for="photo">Выбрать фото:</label>
            <input type="file" id="photo" name="photo[]"  multiple>
            <p>Нажмите для загрузки фото:</p>
        </div>
            <button type="submit" name="submit">Загрузка</button>
    </form>
    <div><?=$form_was_send ? 'yes': ' '; ?></div>
    <?php if(file_exists('name_image.txt')): ?>
        <table class="table table-bordered">
            <?php for($i = 0; $i < count($result); $i++): ?>
                <tr>
                    <td>
                        <img src="<?='gallery'.DIRECTORY_SEPARATOR.$result[$i];?>">
                    </td>
                </tr>
            <?php endfor; ?>
        </table>
    <?php endif; ?>
</div>
</body>
</html>
