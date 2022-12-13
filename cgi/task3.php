<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<meta http-equiv="Content-Language" content="ru">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Cache-Control" content="no-cache, must-revalidate">
<title>Task 3</title>
</head>

<body>
<?php
// Loading an extension based on OS
if (!extension_loaded('mysql'))
{
    if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN')
	{
        if (!dl('mysql.dll'))
			{die("Can't load extension!");}		
    }
	else {
        if (!dl('mysql.so'))
		{die("Can't load extension!");}
    }
}
else
{die("Extension found");}
?>
</body>
</html>