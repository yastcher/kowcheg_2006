#!/usr/local/temp/php/bin/php

<html><head><title> ������� ��� "������" -  �������� �����</title></head>

<body>
<center>
<table height="100%" width="100%">
<tr> <td align="center">
        <table bgcolor="#33FFCC" width="90%">
        <tr>
<!--    <td width="15%"> <a href="..\forum.htm"> ����� </a> </td> -->
        <td width="70%" align="center"> <font face="Bookman Old Style" color="#006600"> <b> �������� �����</b> </font></td>
<!--    <td align="right"> <a href="..\index.htm"> �� ������� </a> </td> -->
        </tr>
        </table>

        <table bgcolor="#33FFCC" width="90%" cellpadding="20">
        <tr><td>
        <?php
        if (file_exists("b.txt")) 
        {$t = file("b.txt");}
        else
        {$fp=@fopen("b.txt", "w");
        fclose($fp);}
        if (!empty($t)) {
        ?>
        <textarea rows="15" cols="70">
        <?php
        for($i=0;$i<count($t);$i++)
        {echo $t[$i];}
        ?>
        </textarea>
        <?php
        }
        ?>
        
        </td>   </tr>   </table>
        <font face="Bookman Old Style" color="#006600"> <b> ������ ���� ���������</b> </font>
        <form action="add.php" method="post">
        <table bgcolor="#33FFCC" width="90%">
        <tr>
        <td align="center"> <br /> 
        ��� �� 30 ��.
        <input name="nam" type="text" size="25" maxlength="35">
        </td>
        <td align="center">
        E-mail
        <input name="mail" type="text">
        </td>   </tr>   </table>
        <table bgcolor="#33FFCC" width="90%">
        <tr>
        <td align="center">
                <table bgcolor="#33FFCC" width="100%">
                <tr>
                <td align="center">
                ���� ��������� (�� 900 ��.) <br />
                <textarea name="mes" rows="5" cols="40"></textarea>
                </td>   </tr>   </table>
        </td>   </tr>
        <tr><td align="center">
        <br />
        <input  type="submit" value="���������">
        </td></tr></table>
        </form>
</td>
</tr>
</table>
</center>
</body>
</html>
