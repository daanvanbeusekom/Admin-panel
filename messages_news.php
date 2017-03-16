<?php

$SQL = "SELECT news_id, news_by, category_id, news_title, news_content, DATE_FORMAT(news_date,'%d')AS post_date_day, DATE_FORMAT(news_date,'%M')AS post_date_month, DATE_FORMAT(news_date,'%Y')AS post_date_year FROM news WHERE news_visible = 1 ORDER BY news_date DESC, news_id DESC";
$result_1 = $connection_WB->query($SQL);
?>

<div id="welcome_message">
					
					<div id="txt_messages_message">
						<p>Alle nieuws berichten</p>
                        <p><a href="news_new.php">Nieuw nieuws bericht</a></p>
								<table>
									<thead>
										<tr>
											<th>Titel</th>
											<th>Datum</th>
											<th>Weergeven</th>
                                            <th>Delete</th>
										</tr>
									</thead>
									<tbody>

								    <?php
									while($row = $result_1->fetch_assoc()){
										echo 	"<tr>";
										echo		"<td>" . $row['news_title'] . "</td>";
										echo		"<td>" . $row['post_date_day'] , $row['post_date_month'] ,  $row['post_date_year']. "</td>",
													"<td><a href='news_edit.php?news=" . $row['news_id'] . "' target='blank'>Weergeven</a></td>",
                                                    "<td><a href='news_delete.php?news=" . $row['news_id'] . "' target='blank'><img src='../IMG/delete.png'></a></td>",
												"</tr>" ;
									}
								?>
									</tbody>
								</table>
                    </div>
</div>