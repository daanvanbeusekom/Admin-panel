<?php
$page_title = "Indexbeheer";
$page_name = "Gebruikers";
$local_page = "<i class='fa fa-user'>&nbsp;</i>Gebruikers /";
include "top_admin.php";
include "users_top.php";

if($_SESSION['signed_in'] == true){
	
$SQL = "SELECT user_id, user_name, user_pass, user_email, user_age, user_date, user_level FROM users WHERE 1";
$result = $connection_WB->query($SQL);

while($row = $result->fetch_assoc()){	
	
?>

								<?php
										echo 	"<tr>";
										echo		"<td>" . $row['user_name'] . "</td>";
										echo		"<td>" . $row['user_email'] . "</td>",
													"<td>" . $row['user_age'] . "</td>",
													"<td>" . $row['user_level'] . "</td>",
													"<td><a href='user_delete.php?user=" . $row['user_id'] . "' ><img src='../IMG/delete.png'></td>",
												"</tr>" ;
									}
								?>
								
								<?php
								include "users_bottom.php"
								?>
<?php
}else{

include "forbidden.php"
?>

<?php
}
?>