<?php
    $name='Максим'; $s_name='Мазур'; $patronymic='Валериевич';
    /*$FIO="{$s_name} {$name} {$patronymic}";*/ /*не обязательно !!!*/
    $year_of_birth=1982;
    /*ЗАГОЛОВКИ*/
    $t_z1='ОСНОВНАЯ СПЕЦИАЛИЗАЦИЯ И НАВЫКИ';
    $t_z2='Разработка проектной документации по направлениях :';
    $t_z3='ОБРАЗОВАНИЕ';
    $t_z4='РАЗРАБАТЫВАЕМЫЕ ОБЪЕКТЫ';
        /*Содержание страницы*/
        $t_z2p1='проектирование систем охранной сигнализации (объектовая и периметральная ОС, системы контроля
			    и управления доступом, тревожная сигнализация);';
        $t_z2p2='проектирование систем охранного телевидения (интегрирование с ОС);';
        $t_z2p3='проектирование телефонизации, радиофикации, производственно-технологической связи, ЛВС;';
        $t_z2p4='проектирование систем пожарной сигнализации и пожаротушения.';

        $t_z3p1='2000-2006 г.г., г.Киев, Украина :';
        $t_z3p2='Национальный технический университет Украины «КПИ».'; /*текст для ссылки*/
        $t_z3p3='Специальность: Электромеханические системы автоматизации и электропривод. 
                 Квалификация:  инженер-электромеханик.';
        $t_z3p4='2017 г. - по сегодняшний день, г.Киев, Украина:';
        $t_z3p5='PHP Academy'; /*текст для ссылки*/
        $t_z3p6='Специальность: PHP разработчик';
        /*Таблица*/
        $th1='Год'; $th2='Название объекта'; $th3='Описание работ';
        $tr1_1=2001; $tr1_2=2007; $tr1_3=2012;
        $tr2_1='НПЗ «Антипинский»'; $tr2_2='НПЗ «Мозырский»'; $tr2_3='ЗАО «Восточная нефтехимическая компания»';
        $tr3_1='Объектовая и периметральная охранная сигнализация, СКУД, видеонаблюдение, связь и радиофикация, 
               пожаротушение';
        $tr3_2='Объектовая охранная сигнализация, локальная вычислительная сеть';
        $tr3_3='Периметральная охранная сигнализация, периметр площадки 2500 м, объектовая охранная сигнализация 
                30 зданий и сооружений, СКУД, видеонаблюдение, связь и радиофикация, оповещение, внутриплощадочные 
                сети, пожарная сигнализация';

    $copyright='2017 Максим Мазур, по всем вопросам пишите по адресу ambrucio@gmail.com /';
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Резюме Мазур М.В.</title>
		<meta charset='utf-8'>
		<link rel='stylesheet' href='style.css'>
	</head>
	<body>
		<p> <img src='bb.jpeg' align='right' border='2' alt='фото резюме'></p>
		<center><h1><?php echo "$s_name $name $patronymic"; ?></h1></center>
		<center><h4><?php echo "Год рождения: $year_of_birth"; ?></h4></center>
		<h3><?php echo $t_z1; ?></h3>
		<hr>
		<dl>
			<dt><em><strong><?php echo $t_z2; ?></strong></em></dt>
				<dd><ul>
                <li><?php echo $t_z2p1; ?></li>
				<li> <?php echo $t_z2p2; ?></li>
				<li><?php echo $t_z2p3; ?></li>
				<li><?php echo $t_z2p4; ?></li>
				</ul></dd>
		</dl>
		<h3><?php echo $t_z3; ?></h3>
		<hr>
		<dl>
			<dt><em><strong><?php echo $t_z3p1; ?></strong></em> </dt>
				<dd><ul>
				<li><a href='http://kpi.ua/ru/'>
                       <?php echo $t_z3p2; ?></a><!--"это моя первая ссылка (открывает в этой же вкладке)"-->
					   <?php echo $t_z3p3; ?></li>
				</ul></dd>
			<dt><em><strong><?php echo $t_z3p4; ?></strong></em> </dt>
				<dd><ul>
				<li><a href='http://php-academy.kiev.ua/' title='в php-academy очень весело и интересно;)'
					   target='_blank'><?php echo $t_z3p5; ?></a> <!--"это моя вторая ссылка (открывает в новой вкладке)"-->
                       <?php echo $t_z3p6; ?></li>
				</ul></dd>
		</dl>
		<h3><?php echo $t_z4; ?></h3>
		<hr>
			<table align='center' cellpadding='5' border='1' width='600'>
			 	<tr bgcolor='#cecdf2' >
                    <th><?php echo $th1; ?></th>
    				<th><?php echo $th2; ?></th>
    				<th><?php echo $th3; ?></th>
    			</tr>
            	<tr align='center'><td><?php echo$tr1_1; ?></td><td><a href='https://www.annpz.ru/' target='_blank'>
                    <?php echo$tr2_1; ?></a></td><td align='justify'><?php echo$tr3_1; ?></td></tr>
    			<tr align='center'><td><?php echo$tr1_2; ?></td><td><a href='https://mnpz.by/' target='_blank'>
                    <?php echo$tr2_2; ?></a></td><td align='justify'><?php echo$tr3_2; ?></td></tr>
    			<tr align='center'><td><?php echo$tr1_3; ?></td><td><a href='https://mnpz.by/' target='_blank'>
                    <?php echo$tr2_3; ?></a></td><td align='justify'><?php echo$tr3_3; ?></td></tr>
   			</table>
		<br>
		<br>
		    <marquee behavior="alternate" direction="left" bgcolor="#f0f0f0">
                    <a href='#top' title='Перейти вверх;)'>На верх</a></marquee>
		    <p>&#169 <?php echo $copyright; ?><a href='http://facebook.com' target='_blank'>
                    <img src='F.png' width='15' height='15'></p>
	</body>

</html>