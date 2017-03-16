<?php

$page_title = "Indexbeheer";
$page_name = "Nieuws delete";
$local_page = "<i class='fa fa-commenting-o'></i>&nbsp;Berichten / verwijderen";
include "top_admin.php";

if($_SESSION['user_level'] == 1){

$post_id = $_GET['news'];

$SQL = "SELECT news_by, category_id, news_title, news_content, category_id FROM news WHERE news_id = '" . $post_id . "'";
$result = $connection_WB->query($SQL);

$sql = "DELETE FROM news WHERE news_id = '" . $post_id . "'";
$result = $connection_WB->query($sql);

if(!$result){
	echo '<p>Mmm er is iets mis gegaan. Probeer het eens opnieuw.</p>';
}else{
	echo '<p>Het bericht is succesvol gedelete.</p>';
	echo '<meta http-equiv="refresh" content="1; url=../news.php">';
}


include "bottom_admin.php"

?>
				
<?php
}else{

include "forbidden.php"
?>

<?php
}
?>