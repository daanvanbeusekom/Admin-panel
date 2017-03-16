<?php
$page_title = "Indexbeheer";
$page_name = "Contact";
$local_page = "<i class='fa fa-phone'>&nbsp;</i>Contact /";
include "top_admin.php";

if($_SESSION['user_level'] == 1){
	
?>
				
				<div id="welcome_message">
					<h2>Hier vind je de contact gegevens van de maker van de site.</h2>
					<p>Als er iets met de site aan de hand is kan je de maker contacten.</p>
					<br />
					<p>De gegevens van de maker :</p>
					<br />
					<div id="contact">
						<div id="contact_left">
							<p> Naam:</p>
							<p> Telefoonnummer:</p>
							<p>	E-mail:</p>
							<p> E-mail:</p>
						</div>
						
						<div id="contact_right">
							<p> Daan van Beusekom</p>
							<p> <a href="tel:0648488530">+31 06 48488530</a></p>
							<p>	<a href="mailto:daanvanbeusekom@outlook.com">daanvanbeusekom@outlook.com</a></p>
							<p> <a href="mailto:daan---10@live.nl">daan---10@live.nl</a></p>
						</div>
					</div>
					<br />
					<br />
					<br />
					<br />
					<br />
					<br />
					<p>Gelieve geen misbruik te maken van deze gegevens.</p>
					<br />
					<p>Je kan ook whatsappen naar 06 48488530!<img src="IMG/whatsapp.png" style="float:right; position:relative;" width="60px"></p>
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