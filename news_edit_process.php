<?php
$page_title = "Indexbeheer";
$page_name = "Pagina's";
$local_page = "<i class='fa fa-clone'>&nbsp;</i>Bewerken /";
include "top_admin.php";

$title = $connection->real_escape_string($_POST['post_title']);
$content = $connection->real_escape_string($_POST['post_content']);
$category_id = $_POST['post_category'];
$post_id = $_POST['post_id'];

$sql = "UPDATE news SET news_title = '" . $title . "', news_content = '" . $content . "', category_id = '" . $category_id . "'
WHERE news_id = '" . $post_id . "'";

$result = $connection_WB->query($sql);

if(!$result){
	echo '<p>Mmm er is iets mis gegaan. Probeer het eens opnieuw.</p>';
}else{
	echo '<p>Het bericht is succesvol bewerkt.</p>';
	echo '<meta http-equiv="refresh" content="1; url=../news.php">';
}



include "bottom_admin.php"

?>
				