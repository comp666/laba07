<?php ## ����� ���.
echo date("l ds of F Y h:s A")."<br>";
echo date("������� d.m.Y")."<br>";
echo date("���� ���� ��������� d.mY", filectime(__FILE__));
?>
////////////////////////////////////////////////////////////////
<?php ## ������������� PREG_OFFSET_CAPTURE.
$st = '<b>������ �����</b>';
$re = '|<(\w+).*?>(.*?)</\1|s';
preg_match($re, $st, $p, PREG_OFFSET_CAPTURE);
echo "<pre>"; print_r($p); echo "</pre>";
?>