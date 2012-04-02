<?php
$sqlquery  = "SELECT  CONCAT(firstname,"; $sqlquery .= "\" \",";
$sqlquery .= "middlename,"; $sqlquery .= "\" \",";
$sqlquery .= "lastname) AS NAME ,"; 
$sqlquery .= "father_name,"; $sqlquery .= "mother_name,";
$sqlquery .= "class_roll_no,"; $sqlquery .= "birthdate,"; 
$sqlquery .= "CONCAT(address_1,"; $sqlquery .= "\", \""; 
$sqlquery .= ",address_2,"; $sqlquery .= "\", \"";
//$sqlquery .= "address_2,
// if(address_2 !=\"\",'address_2, ', '')";
// if(address_2 !="null")
// {
 // $sqlquery .= "address_2,', '"; 
// }

$sqlquery .= ",city,','";$sqlquery .= "\" \","; 
$sqlquery .= "pin_code,','";$sqlquery .= "\" \","; 
$sqlquery .= "state) AS ADDRESS,"; 
$sqlquery .= "email,"; $sqlquery .= "contact_no,";
$sqlquery .= "comments,"; 
$sqlquery .= "photo,";
$sqlquery .= "gender,";
$sqlquery .= "branch";
$sqlquery .= "  ";
$sqlquery .= "FROM $table ";
$sqlquery .= "where class_roll_no != ' ' and  ";
$sqlquery .= " branch like '%$OneBranch%' ";

$sqltmp = $sqlquery;

?>
