<?php
function add_flash_message($message){

	$_SESSION["msg"] = $message;
}

function show_flash_message() {
	if(isset($_SESSION["msg"])) {
		return $_SESSION["msg"];
	}
}
?>