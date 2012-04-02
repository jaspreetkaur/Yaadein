<?php

mysql_connect('localhost', 'jaspreet', 'a') 
    or die("cannot connect to database\n");
mysql_select_db('jaspreet') or die(mysql_error());

$stm = "SELECT `class_roll_no`,`photo` FROM `student_profile` ";

$result = mysql_query($stm)
    or die(mysql_error());



while ($row = mysql_fetch_assoc($result)) {
    echo "convert ";
    echo "/usr/local/lib/python2.6/dist-packages/django/contrib/admin/media/",$row['photo'];
    echo " ";
    echo "files/S2011",$row['class_roll_no'];
    echo ".png";
    echo "\n";
}

mysql_close();

?>

