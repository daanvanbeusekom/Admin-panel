<?php
$page_title = "Indexbeheer";
$page_name = "Weergave";
$local_page = "<i class='fa fa-paint-brush'>&nbsp;</i>Weergave /";
include "top_admin.php";

if($_SESSION['user_level'] == 1){
	
?>
				
				<div id="welcome_message">
					<h2>Hier vind je een overzicht van de thema's die geïnstalleerd, gedownload en geconfigureerd.</h2>
					<br />
					<p>De volgende thema's zijn geïnstalleerd :</p>
					<br />
					<br />
						
						<div id="theme_buttons">
							<img src="IMG/dvb_them.png">
								<center><div id="discription">On My Way Thema</div></center>
						</div>
						
						<div id="theme_buttons_2">
							<img src="IMG/admin_theme.png">
								<center><div id="discription">Admin Thema</div></center>
						</div>
						<br />
						<p>Geconfigureerd :</p>
						
						<table>
							<thead>
								<tr>
									<th>Geconfigureerd</th>
									<th>Niet Geconfigureerd</th>
									<th>Extra</th>
								</tr>
							</thead>	
							<tbody>
								<tr>
									<td>On My Way Thema</td>
									<td>Extra body</td>
									<td>Forum(nog niet af)</td>
								</tr>
								<tr>
									<td>Admin Thema</td>
									<td>-</td>
									<td>-</td>
								</tr>
							</tbody>
						</table>

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