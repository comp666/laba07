<?php ## Вывод дат.
echo date("l ds of F Y h:s A")."<br>";
echo date("Сегодня d.m.Y")."<br>";
echo date("Этот файл датирован d.mY", filectime(__FILE__));
?>
////////////////////////////////////////////////////////////////
<?php ## Использование PREG_OFFSET_CAPTURE.
$st = '<b>жирный текст</b>';
$re = '|<(\w+).*?>(.*?)</\1|s';
preg_match($re, $st, $p, PREG_OFFSET_CAPTURE);
echo "<pre>"; print_r($p); echo "</pre>";
?>