<?php
$db_user = 'root';
$db_pass= '';
$db_name='userAccount';

$db = newPDO('mysql:host=localhostldbname='.$db_name . ; charset=utf8 , $db_user,$db_pass);
$db ->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_ECCEPTION); 
?>