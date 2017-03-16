<?php
$page_title = "Indexbeheer";
$page_name = "Chat";
$local_page = "<i class='fa fa-envelope'>&nbsp;</i>Chat /";


include "top_admin.php";

if($_SESSION['user_level'] == 1){
	
$SQL = "SELECT chat_id, post_by, category_id, chat_title, chat_content, DATE_FORMAT(chat_date,'%d')AS post_date_day, DATE_FORMAT(chat_date,'%M')AS post_date_month, DATE_FORMAT(chat_date,'%Y')AS post_date_year FROM chat_admin WHERE chat_visible = 1 ORDER BY chat_id ASC, chat_id DESC";
$result1 = $connection->query($SQL);	

$SQL = "SELECT chat_id, post_by, category_id, chat_title, chat_content, DATE_FORMAT(chat_date,'%d')AS post_date_day, DATE_FORMAT(chat_date,'%M')AS post_date_month, DATE_FORMAT(chat_date,'%Y')AS post_date_year FROM chat_admin WHERE chat_visible = 1 ORDER BY chat_id ASC, chat_id DESC";
$result2 = $connection->query($SQL);	
?>

				<?php
				while($row1 = $result1->fetch_assoc()){
					
					if ($row1['chat_id'] = $_SESSION['user_id']){
						$div = "own";
					}else{
						$div = "";
					}
				}
				?>

				<div class="alert warning">
				  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
				  <strong>Waarschuwing!</strong> De chat functie werkt momenteel nog niet goed, er word aan gewerkt.
				</div>

				<div id="welcome_message">
				<p>Hier kan je chatten met de andere admin gebruikers.</p>
				<br />
				<p><?php echo ''. $_SESSION['user_name'] .'' ; ?> is momenteel ingelogd. Je chat nu onder deze naam.</p>
				
					<div id="chat_box">
						<div id="table-wrapper">
							<div id="table-scroll">
						<?php 
							while($row2 = $result2->fetch_assoc()){
								echo "<div class='message'>";
								echo "<h3 id='p'>" . $row2['chat_title'] . "</h2>";
								echo "<p id='p'>" . $row2['chat_content'] . "</p>";
								echo "<span>";
								echo $row2['post_date_day'] . " ";
								echo $row2['post_date_month']. " ";
								echo $row2['post_date_year']. " Door: ";
								echo get_maker_name($row2['post_by'],$connection_WB);
								echo "</span>";
								echo "<div id='arrow-right'></div></div>";
							}
						?>
							</div>
						</div>
					</div>
					<div id="new_message">
						<form method="POST" action="new_message.php">
							<label for="post_title">
								<input type="text" name="post_title" id="post_title" placeholder="Titel" required />
							</label>
							<label for="post_content">
								<textarea type="txt" name="post_content" id="post_content" placeholder="Bericht"></textarea>
							</label>
							
							
							<label id="disable" disable>
								<input type="submit" value="Posten" class="submit" />	
							</label>
						</form>
					</div>
				</div>
				
				

				
<?php

include "bottom_admin.php"

?>
				
<?php
}else{

include "forbidden.php"
?>

<?php
}
?>