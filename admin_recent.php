<?php
$SQL = "SELECT recent_id, recent_name FROM recent WHERE 1 ORDER BY recent_id DESC LIMIT 5";
$result = $connection->query($SQL);

while($row = $result->fetch_assoc()){	
?>

						<p><?php echo $row['recent_name']?></p>


<?php
}
?>