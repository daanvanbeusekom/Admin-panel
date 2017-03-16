<?php
$page_title = "Indexbeheer";
$page_name = "Instellingen";
$local_page = "<i class='fa fa-cogs'>&nbsp;</i>Instellingen /";
include "top_admin.php";

if($_SESSION['user_level'] == 1){
	
?>				
				<div id="welcome_message">
					<h2> Hier vind je de instellingen en doorverwijzingen naar ander instellingen.</h2>
					<br />
					<p>de volgende instellingen zijn geconfigureerd op de site :</p>
					<br />
					<div id="check_list_settings">
						<div id="theme_title">
							<p>On My Way Thema :</p>
						</div>
							<br />
							<div id="check_list_theme">
								<p><i class="fa fa-check"></i>&nbsp;Nederlands</p>
								<p><i class="fa fa-check"></i>&nbsp;Home-Page</p>
								<p><i class="fa fa-check"></i>&nbsp;Nieuws</p>
								<p><i class="fa fa-check"></i>&nbsp;Ons Idee</p>
								<br />
								<div id="social_check_list">
									<p>Sociaal :</p>
									<br />
									<p><i class="fa fa-check"></i>&nbsp;Facebook</p>
									<p><i class="fa fa-check"></i>&nbsp;Twitter</p>
									<p><i class="fa fa-times"></i>&nbsp;Soundcloud</p>
									<p><i class="fa fa-check"></i>&nbsp;YouTube</p>
									<p><i class="fa fa-check"></i>&nbsp;Instagram</p>
									<br />
								</div>
								
								<div id="extra_check_list">
									<p>Extra :</p>
									<br />
									<p><i class="fa-fa-check"></i>&nbsp;Uitleg</p>
									<p><i class="fa fa-check"></i>&nbsp;Video's</p>
									<p><i class="fa fa-times"></i>&nbsp;Connect</p>
									<p><i class="fa fa-check"></i>&nbsp;Grafiek</p>
								</div>
							</div>
							
							<div id="check_list_theme_2">
								<div id="theme_title">
									<p>Admin Thema :</p>
								</div>
									<br />
									<div id="check_list_theme">
										<p><i class="fa fa-check"></i>&nbsp;Nederlands</p>
										<p><i class="fa fa-check"></i>&nbsp;Log in</p>
										<p><i class="fa fa-check"></i>&nbsp;Profiel</p>
										<p><i class="fa fa-check"></i>&nbsp;Overzicht Site</p>
										<p><i class="fa fa-check"></i>&nbsp;Overzicht Site</p>
										<br />
										<div id="extra_check_list">
											<p> Extra :</p>
											<br />
											<p><i class="fa fa-check"></i>&nbsp;Media</p>
											<p><i class="fa fa-check"></i>&nbsp;Chat</p>
											<p><i class="fa fa-check"></i>&nbsp;Statistieken</p>
											<p><i class="fa fa-check"></i>&nbsp;Recent</p>
											<p><i class="fa fa-check"></i>&nbsp;Meerdere gebruikers</p>
											<p><i class="fa fa-times"></i>&nbsp;File editor</p>
											<p><i class="fa fa-times"></i>&nbsp;Connect met Step-Up</p>
										</div>
									</div>
							</div>
					</div>
					
					<p style="float:right;"><a href="all_settings.php">Ga naar alle instellingen&nbsp;<i class="fa fa-arrow-right"></i></a></p>
					<br />
					<br />
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