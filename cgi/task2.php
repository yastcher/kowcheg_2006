#!/usr/local/temp/php/bin/php -c/http/to/tourclub.rsu.ru/etc/php.ini 

<script language="php">
function print_values($range, $curr)
{
$total= $curr;
for ($i= $range[0]; $i< ($range[1]+1); $i++)
	{
	for ($j= $range[2]; $j< ($range[3]+1); $j++)
		{
		for ($k= $range[4]; $k< ($range[5]+1); $k++)
			{
			for ($s= $range[6]; $s< ($range[7] +1); $s++, $total++)
				{
				echo "$i.$j.$k.$s<br>";				
				}
			}
		}
	}
return $total;
}

$startip= "1.1.1.1";
$endip= "2.2.2.2";

list($st1, $st2, $st3, $st4) = explode(".", $startip);
list($end1, $end2, $end3, $end4) = explode(".", $endip);

$st1= (int)$st1;
$st2= (int)$st2;
$st3= (int)$st3;
$st4= (int)$st4;

$end1= (int)$end1;
$end2= (int)$end2;
$end3= (int)$end3;
$end4= (int)$end4;

if ($st1 > $end1)
{die("Wrong values are defined!");}

if (($st1 == $end1) and ($st2 > $end2) and ($st3 > $end3) and ($st4 > $end4))
{die("Wrong values are defined!");}

if (($st1 == $end1) and ($st2 == $end2) and ($st3 > $end3) and ($st4 > $end4))
{die("Wrong values are defined!");}

if (($st1 == $end1) and ($st2 == $end2) and ($st3 == $end3) and ($st4 > $end4))
{die("Wrong values are defined!");}


//Main crap begins here
//1.1.1.1 - 1.1.1.255
$num= 0;
$range= array($st1, $st1, $st2, $st2, $st3, $st3, $st4, 255);
$num=print_values($range, $num);
//echo "<hr>";
//echo "Total rows - $num<hr>";

//1.1.2.0 - 1.255.255.255
/*$range= array($st1, $st1, $st2, 255, 2, 255, 0, 255);
$num=print_values($range, $num);*/
//echo "<hr>";
//echo "Total rows - $num<hr>";

//2.0.0.0 - 2.1.255.255
$range= array($end1, $end1, 0, 1, 0, 255, 0, 255);
$num=print_values($range, $num);
//echo "<hr>";
//echo "Total rows - $num<hr>";

//2.2.0.0 - 2.2.1.255
$range= array($end1, $end1, 0, $end2, 0, 1, 0, 255);
$num=print_values($range, $num);
//echo "<hr>";
//echo "Total rows - $num<hr>";

//2.2.2.0 - 2.2.2.2
$range= array($end1, $end1, $end2, $end2, $end3, $end3, 0, $end4);
$num=print_values($range, $num);
echo "<hr>";
echo "Total rows - $num";

/*for ($i=$st1; $i < ($end1 + 1); $i++)
	{
	for ($j=$st2; $j< (256); $j++)
		{
		for ($k=$st3; $k<(256); $k++)
			{
			for ($s=$st4; $s<(256); $s++)
				{
				echo "$i.$j.$k.$s<br>";
				}
			}
		}
	}*/
</script>