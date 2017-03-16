<?php

$page_title = "Nieuwe Post";
include "top.php";

check_signed_in();
check_admin();

$title = $connection->real_escape_string($_POST['post_title']);
$content = $connection->real_escape_string($_POST['post_content']);
$post_by = $_SESSION['user_id'];

$sql = "INSERT INTO chat_admin(chat_title, chat_content, chat_date, post_by, chat_visible) 
VALUES ('" . $title . "', '" . $content . "', NOW(), '" . $post_by . "', 1)";

$result = $connection->query($sql);

if(!$result){
	echo 'Mmm er is iets mis gegaan. Probeer het eens opnieuw.';
}else{
	echo 'Het bericht is succesvol geplaatst.';
	header('Refresh: 0; chat.php');
}

include "bottom.php";

?>