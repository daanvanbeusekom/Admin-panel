<?php
$page_title = "Indexbeheer";
include "top_admin.php";


$SQL = "SELECT home_id, post_by, category_id, home_title, home_content, DATE_FORMAT(home_date,'%d')AS post_date_day, DATE_FORMAT(home_date,'%M')AS post_date_month, DATE_FORMAT(home_date,'%Y')AS post_date_year FROM over WHERE home_visible = 1 ORDER BY home_date DESC, home_id DESC";
$result = $connection->query($SQL);
	
?>

					
						<br />
						<br />
						<p>Home-Pagina bericht:</p>
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

									while($row_2 = $result->fetch_assoc()){
										echo 	"<tr>";
										echo		"<td>" . $row['home_title'] . "</td>";
										echo		"<td>" . $row['post_date_day'] , $row['post_date_month'] ,  $row['post_date_year']. "</td>",
													"<td><a href='../home_edit.php?post=" . $row['home_id'] . "' target='blank'>Weergeven</a></td>",
												"</tr>" ;
									}
								?>
								
									</tbody>
								</table>
								