<?php include_once('../load.php'); 
if($_GET['deleteCard']) {
	Cards::newInstance()->deleteCard($_GET['deleteCard']);
	header('Location: index.php');
}
if($_POST['addCard']) {
	$title = $_POST['title'];
	$description = $_POST['description'];
	$url = $_POST['url'];
	$image = $_POST['image'];
	$color = $_POST['color'];
	$facebook = $_POST['facebook'];
	$twitter = $_POST['twitter'];
	$instagaram = $_POST['instagaram'];
	$youtube = $_POST['youtube'];
	$linkedin = $_POST['linkedin'];
	
	if( $title &  $description & $url) {
		if($_POST['editCard']) {
			Cards::newInstance()->updateCard( $_POST['editCard'], $title, $description, $url, $image, $color, $facebook, $twitter, $instagaram, $youtube, $linkedin);
		} else {
			Cards::newInstance()->insertCard($title, $description, $url, $image, $color, $facebook, $twitter, $instagaram, $youtube, $linkedin);
		}
		add_flash_message("Successfull");
		$_SESSION["errormsg"]=='Success';
		header('Location: index.php');
		
	} else {
		header('Location: index.php?action=add');
	}
}

 ?>