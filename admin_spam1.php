<?php
include("dbconnect.php");

session_start();
extract($_POST);
  $i=$_REQUEST['id'];
  $e=$_REQUEST['email'];
echo $qry=mysql_query("update user_messages set status=1  where id='$i'");
echo $qry1=mysql_query("update user_details set status='1'  where email='$e'");

  if($qry)
  {
	header("location:admin_spam.php");

 }
  else
  {  echo "f";
  }

?>