<?php ## Âûâîä äàò.
echo date("l ds of F Y h:s A")."<br>";
echo date("Ñåãîäíÿ d.m.Y")."<br>";
echo date("Ýòîò ôàéë äàòèðîâàí d.mY", filectime(__FILE__));
?>
////////////////////////////////////////////////////////////////
<?php ## Èñïîëüçîâàíèå PREG_OFFSET_CAPTURE.
$st = '<b>æèðíûé òåêñò</b>';
$re = '|<(\w+).*?>(.*?)</\1|s';
preg_match($re, $st, $p, PREG_OFFSET_CAPTURE);
echo "<pre>"; print_r($p); echo "</pre>";
?>
