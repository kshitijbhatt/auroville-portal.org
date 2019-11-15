<?php include_once('../load.php'); 
 session_start();
 include('header.php');
 
 //$_SESSION["errormsg"]='please try again';
 //echo $_SESSION["errormsg"];
 
 if(@$_GET['action'] == "add" or @$_GET['action'] == "edit") {
	include('cards/frm.php');
} else {
	include('cards/list.php');
}
include('footer.php');
?>