#!/usr/local/temp/php/bin/php -c/http/to/tourclub.rsu.ru/etc/php.ini

<?php
$connstr= "dbname=tourclub user=tourclub password=toursqladm host=db.tourclub.rsu.ru"; 
$db_con = pg_connect($connstr);
if ($db_con) 
{
echo "<p>Connection successful</p>";
}
else
{ 
    echo "<p>No connection to db available!</p>"; 
    pg_errormessage($db_con)."<br>\n";
} 
?>
