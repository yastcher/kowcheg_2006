#!/usr/local/temp/php/bin/php

<html xmlns="http://www.w3.org/1999/xhtml"
        xml:lang="ru" lang="ru">
<head>
<title> Турклуб РГУ "КОВЧЕГ" -  Гостевая книга - Добавление сообщения </title>
<meta name="description" contents="Турклуб РГУ КОВЧЕГ - Гостевая книга" />
<meta name="author" contents="Dremov Yuri N.  yudremov@rostov.ru" />
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
</head>

<body>
<?php
if (!empty($_POST['nam']))
{ $tn = htmlspecialchars($_POST['nam'], ENT_QUOTES);
}
else
{ $tn = 'Прохожий';
}
if (!empty($_POST['mail']))
{ $te = htmlspecialchars($_POST['mail'], ENT_QUOTES);
}
else
{ $te = 'Без адреса';
}
if (( strlen(rtrim($_POST['mes']))) != 0 )
{ $t2 = htmlspecialchars($_POST['mes'], ENT_QUOTES);
}
else
{
exit("<table cellspacing='5' cellpadding='5' width='100%' height='100%'>
<tr><td><h3><center> Вы не ввели сообщение </center></h3><br />
<input type='button' value='Назад' onclick='history.go(-1)'></td></tr></table>");
}
$dat = date("d.m.y H:i");
$fp = @fopen("b.txt", "a");
if(!$fp) exit("<center> Невозможно записать сообщение. Попробуйте позже. </center>");
fwrite($fp, $dat." ".$tn." mailto:".$te."\n".$t2."\n\n");
fclose($fp);
exit("<table cellspacing='5' cellpadding='5' width='100%' height='100%'>
<tr><td><h3><center> Ваше сообщение успешно загружено </center></h3><br />
<a href='guest.php'>Назад к гостевой книге</a><br />
<a href='..\index.htm'>На главную</a> </td></tr></table>");
?>
</body>
</html>
