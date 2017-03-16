<?php

$page_title = "Edit Home";
include "top.php";

check_signed_in();
check_admin();

$title = $connection->real_escape_string($_POST['gender']);
$post_id = $_POST['user_id'];

$sql = "UPDATE users SET user_theme = '" . $title . "'
WHERE user_id = '" . $post_id . "'";

$result = $connection->query($sql);

if(!$result){
	echo '<p>Mmm er is iets mis gegaan. Probeer het eens opnieuw.</p>';
}else{
	echo '<center><p>Het thema is succesvol bijgewerkt.<br/> U word nu uitgelogd om de bewerking te verwerken.</p></center>';
	echo '<meta http-equiv="refresh" content="3; url=sign_out.php">';
}

include "bottom.php";

?>