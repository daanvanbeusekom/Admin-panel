<?php
$page_title = "Indexbeheer";
$page_name = "Berichten";
$local_page = "<i class='fa fa-commenting-o'></i>&nbsp;Berichten /";
include "top_admin.php";

if($_SESSION['user_level'] == 1){

$SQL = "SELECT txt_id, post_by, category_id, txt_title, txt_content, DATE_FORMAT(txt_date,'%d')AS post_date_day, DATE_FORMAT(txt_date,'%M')AS post_date_month, DATE_FORMAT(txt_date,'%Y')AS post_date_year FROM txt WHERE txt_visible = 1 ORDER BY txt_date DESC, txt_id DESC";
$result_1 = $connection_WB->query($SQL);

?>
				
				<div id="messages_message">
					<h2>Hier vind je het overzicht Berichten die op de site staan.</h2>
					
					<div id="txt_messages_message">
						<p>Alle-Pagina berichten:</p>
								<table>
									<thead>
										<tr>
											<th>Titel</th>
											<th>Datum</th>
											<th>Weergeven</th>
										</tr>
									</thead>
									<tbody>

								<?php
									while($row = $result_1->fetch_assoc()){
										echo 	"<tr>";
										echo		"<td>" . $row['txt_title'] . "</td>";
										echo		"<td>" . $row['post_date_day'] , $row['post_date_month'] ,  $row['post_date_year']. "</td>",
													"<td><a href='txt_edit.php?post=" . $row['txt_id'] . "' target='blank'>Weergeven</a></td>",
												"</tr>" ;
									}
								?>
								
									</tbody>
								</table>
                    </div>
                </div>
                    
                <?php
    
                include "messages_news.php";
                include "bottom_admin.php";
                ?>
                        
					
					


<?php
}else{

include "forbidden.php"
?>

<?php
}
?>