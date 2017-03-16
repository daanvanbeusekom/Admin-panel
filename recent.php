<?php
$page_title = "Indexbeheer";
$page_name = "Recent";
$local_page = "<i class='fa fa-clock-o'>&nbsp;</i>Recent /";
include "top_admin.php";
include "top_recent.php";

if($_SESSION['user_level'] == 1){

$SQL = "SELECT recent_id, recent_name FROM recent WHERE 1 ORDER BY recent_id DESC";
$result = $connection->query($SQL);

while($row = $result->fetch_assoc()){	
?>

						<p><?php echo $row['recent_name']?></p>
					
<?php
}
include "bottom_recent.php";
include "bottom_admin.php";

?>
					
<?php
}else{

include "forbidden.php"
?>

<?php
}
?>