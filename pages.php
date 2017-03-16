<?php
$page_title = "Indexbeheer";
$page_name = "Pagina's";
$local_page = "<i class='fa fa-clone'>&nbsp;</i>Pagina's /";
include "top_admin.php";

if($_SESSION['user_level'] == 1){
	
?>
				
				<div id="pages_message">
					<h2>Hier vind je de pagina's die er zijn en kan je ze bewerken of verwijderen.</h2>
					
					<div id="txt_pages_message">
						<table>
							<thead>
								<tr>
									<th>Titel</th>
									<th>Maker</th>
									<th>Datum</th>
									<th>Bewerken</th>
								</tr>
							</thead>
							<tbody>
								<tr><td>Home</td><td>Admin</td><td>13-2-2017</td><td><a href="txt_edit.php?post=1" target="_blank">Bewerken</a></td></tr>
								<tr><td>Ons Idee</td><td>Admin</td><td>13-2-2017</td><td><a href="txt_edit.php?post=2" target="_blank">Bewerken</a></td></tr>
								<tr><td>Technologie</td><td>Admin</td><td>13-2-2017</td><td><a href="txt_edit.php?post=3" target="_blank">Bewerken</a></td></tr>
								<tr><td>Nieuws</td><td>Admin</td><td>13-2-2017</td><td><a href="../news.php" target="_blank">Bewerken</a></tr>
								<tr><td>Contact</td><td>Admin</td><td>13-2-2017</td><td><a href="txt_edit.php?post=4" target="_blank">Bewerken</a></td></tr>
								<tr><td>Inloggen</td><td>Admin</td><td>13-2-2017</td><td></tr>
							</tbody>
						</table>
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