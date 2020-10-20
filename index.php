<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="script.js"></script>
	<title>Веб-программирование</title>
</head>
<body>
	<div class="header">
		<h1 id="intro_header">Лабораторная по Веб-Программированию</h1>
		<div class="header_info">
			<p>Выполнил: Рафаилов Илья Юрьевич. Вариант: 2117</p>
			<hr>
		</div>
	</div>

	<div class="mission">
		<p id="mission_first">Для расположения текстовых и графических элементов необходимо использовать блочную верстку.</p>
		<p>•Данные формы должны передаваться на обработку посредством GET-запроса.</p>
		<p>•Таблицы стилей должны располагаться в отдельных файлах.</p>
		<p>•При работе с CSS должно быть продемонстрировано использование селекторов классов, селекторов дочерних элементов, селекторов псевдоэлементов, селекторов элементов а также такие свойства стилей CSS, как наследование и каскадирование.</p>
		<p>•HTML-страница должна иметь "шапку", содержащую ФИО студента, номер группы и новер варианта. При оформлении шапки необходимо явным образом задать шрифт (monospace), его цвет и размер в каскадной таблице стилей.</p>
		<p>Отступы элементов ввода должны задаваться в пикселях.</p>
		<p>•Страница должна содержать сценарий на языке JavaScript, осуществляющий валидацию значений, вводимых пользователем в поля формы. Любые некорректные значения (например, буквы в координатах точки или отрицательный радиус) должны блокироваться.</p>

		<img class="task_image" src="images/areas.png" alt= "Таблица значений">
	</div>

	<div class="choose">
		<form onsubmit="return check()" action="work.php" method="GET">
			<label>X</label>
			<input type="text" name="X" maxlength="8" id="X" placeholder="[-5;3]">
			<br>
			<label>Y</label>
			<input type="text" name="Y" maxlength="8" id="Y" placeholder="[3;3]">
			<br>
			<label>R</label>
			<input type="text" name="R" maxlength="8" id="R" placeholder="[2;5]">
			<br>
			<input type="submit" name="submit" value="Выполнить">
		</form>

		<form action="work.php" method="GET">
			<input type="submit" name="des" value="Очистить сессию" id="clear_button">
		</form>
		
	</div>
	<div class="buttons">
		<input type="button" onclick="test()" value=" Сбросить " id="reset_button">
	</div>

	<table align="center" border="1" cellpadding="0" cellspacing="0" width="100%" style="color:brown; width: 150px">
            <tr>
                <td><h3>X</h3></td>
                <td><h3>Y</h3></td>
                <td><h3>R</h3></td>
                <td><h3>Результат</h3></td>
                <td><h3>Дата</h3></td>
                <td><h3>t выполнения</h3></td>
            </tr>

            <?php
            if (isset($_SESSION["data"])) 
                foreach ($_SESSION["data"] as $se)
                    print $se;
            ?>


        </table>


	<div class="footer">
		<hr>
		ITMO
	</div>
</body>
</html>