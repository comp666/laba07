<?php ## ����� ���.
echo date("l ds of F Y h:s A")."<br>";
echo date("������� d.m.Y")."<br>";
echo date("���� ���� ��������� d.mY", filectime(__FILE__));
?>