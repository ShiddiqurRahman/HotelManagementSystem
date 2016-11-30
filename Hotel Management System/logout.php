<?php
session_start();

if(!isset($_SESSION['name']))
{
 header("Location: index.php");
}
else if(isset($_SESSION['name'])!="")
{
 session_destroy();
 unset($_SESSION['name']);
 header("Location: index.php");
}

?>