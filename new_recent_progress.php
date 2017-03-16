<?php
$page_title = "Indexbeheer";
$page_name = "Recent";
$local_page = "<i class='fa fa-clock-o'>&nbsp;</i>Recent / Nieuwe Gebeurtenis";
include "top_admin.php";

if($_SESSION['user_level'] == 1){

$title = $connection->real_escape_string($_POST['recent_name']);


$sql = "INSERT INTO recent(recent_name) VALUES ('" . $title . "') ";

$result = $connection->query($sql);

if(!$result){
	echo '<p>Mmm er is iets mis gegaan. Probeer het eens opnieuw.</p>';
}else{
	echo '<p>Het bericht is succesvol geplaatst.</p>';
	echo '<meta http-equiv="refresh" content="1; url=recent.php">';
}

include "bottom_admin.php";

?>
				
<?php
}else{

include "forbidden.php"
?>

<?php
}
?>