<?php
session_start();
include ('../connection.php'); 
if(true)//isset($_SESSION['UserName'])&& isset($_SESSION['password'])&&isset($_SESSION['role'])
{
  echo "hello instructor";
}
else 
  header("location:../login.php")
?>
