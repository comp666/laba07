<?php ## Вывод дат.
echo date("l ds of F Y h:s A")."<br>";
echo date("Сегодня d.m.Y")."<br>";
echo date("Этот файл датирован d.mY", filectime(__FILE__));
?>