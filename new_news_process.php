<?php

$page_title = "Indexbeheer";
$page_name = "Nieuw nieuws";
$local_page = "<i class='fa fa-commenting-o'></i>&nbsp;Berichten / Bewerken";
include "top_admin.php";

$title = $connection->real_escape_string($_POST['post_title']);
$content = $connection->real_escape_string($_POST['post_content']);
$category_id = $_POST['post_category'];
$post_by = $_SESSION['user_id'];

$sql = "INSERT INTO news(news_title, news_content, news_date, category_id, news_by, news_visible) 
VALUES ('" . $title . "', '" . $content . "', NOW(), '" . $category_id . "', '" . $post_by . "', 1)";

$result = $connection_WB->query($sql);

if(!$result){
	echo 'Mmm er is iets mis gegaan. Probeer het eens opnieuw.';
}else{
	echo 'Het bericht is succesvol geplaatst.';
	echo '<meta http-equiv="refresh" content="1; url=../news.php">';
}

include "bottom_admin.php"

?>