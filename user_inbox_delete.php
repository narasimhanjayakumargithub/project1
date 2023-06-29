<?php
include("dbconnect.php");

session_start();
extract($_POST);
  $i=$_REQUEST['id'];
 
$qry1=mysql_query("delete from user_messages where id='$i'");
echo $a=mysql_num_rows($qry1);
  
header("location:user_inbox.php");

 

?>