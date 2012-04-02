<?php
$dbhost = 'localhost';
$dbuser = 'jaspreet';
$dbpass = 'a';
$dbname = 'jaspreet';
$table= 'student_profile';


$conn = mysql_connect('localhost', 'jaspreet', 'a') or die                     
 ('Error connecting to mysql');

mysql_select_db('jaspreet');

//$result = mysql_query("SELECT * FROM student_profile WHERE (class_roll_no IS NOT NULL) ORDER BY class_roll_no limit 3 ");
//$rows = mysql_num_rows($result);

?>
