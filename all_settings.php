<?php
$page_title = "Indexbeheer";
$page_name = "Instellingen";
$local_page = "<i class='fa fa-cogs'>&nbsp;</i>Instellingen / Alle Instellingen";
include "top_admin.php";

if($_SESSION['user_level'] == 1){
	
?>				
				<div id="welcome_message">
				<h2> Hier vind je alle instellingen.</h2>
					<br />
					<p>de volgende instellingen zijn geconfigureerd op de site :</p>
					<br />
					<div id="check_list_settings">
						<div id="theme_title">
							<p>De Fysio Thema :</p>
						</div>
							<br />
							<div id="check_list_theme">
								<p><i class="fa fa-check"></i>&nbsp;Nederlands</p>
								<p><i class="fa fa-check"></i>&nbsp;Home-Page</p>
								<p><i class="fa fa-check"></i>&nbsp;Uitslagen</p>
								<p><i class="fa fa-check"></i>&nbsp;Over</p>
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
				</div>
				
				<div id="messages_message">
					<h2>Meldingen</h2>
					<p>Hier vind je de verschillende meldingen die weergegeven kunnen worden in het admin thema.</p>
				</div>
				
						<div class="alert">
						  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
						  <strong>Gevaar!</strong> De gevaar melding.
						</div>
						<div class="alert success">
						  <span class="closebtn">&times;</span>  
						  <strong>Success!</strong> De succes melding.
						</div>
						<div class="alert info">
						  <span class="closebtn">&times;</span>  
						  <strong>Informatie!</strong> De informatie melding.
						</div>
						<div class="alert warning">
						  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
						  <strong>Waarschuwing!</strong> De waarschijwings melding.
						</div>
						
				<div id="welcome_message">
					<h2>Buttons</h2>
					<p>De verschillende soorten buttons.</p>
					
					<p>Normale grote:</p>
					<form style="width:1200px;">
						<label id="disable" disable>
							<input type="submit" value="Posten" class="submit" />	
						</label>
						
						<label id="disable" disable>
								<input id="red" type="submit" value="Posten" class="submit" />	
						</label>
						<label id="disable" disable>
								<input id="green" type="submit" value="Posten" class="submit" />	
						</label>
						<label id="disable" disable>
								<input id="blue" type="submit" value="Posten" class="submit" />	
						</label>
						<label id="disable" disable>
								<input id="orange" type="submit" value="Posten" class="submit" />	
						</label>
					</form>
					
					<br />
					<p>Grote buttons:</p>
					<form style="width:1200px;">
						<label id="disable" disable>
							<input type="submit" value="Posten" class=" big submit"/>	
						</label>
						<label id="disable" disable>
								<input id="red" id="big" type="submit" value="Posten" class="big submit" />	
						</label>
						<label id="disable" disable>
								<input id="green" type="submit" value="Posten" class="big submit" />	
						</label>
						<label id="disable" disable>
								<input id="blue" type="submit" value="Posten" class="big submit" />	
						</label>
						<label id="disable" disable>
								<input id="orange" type="submit" value="Posten" class="big submit" />	
						</label>
					</form>
						
					<br />
					<p>Lange buttons:</p>
					<form style="width:1200px;">
						<label id="disable" disable>
							<input type="submit" value="Posten" class="long submit"/>	
						</label>
						<label id="disable" disable>
								<input id="red" id="big" type="submit" value="Posten" class="long submit" />	
						</label>
						<label id="disable" disable>
								<input id="green" type="submit" value="Posten" class="long submit" />	
						</label>
						<label id="disable" disable>
								<input id="blue" type="submit" value="Posten" class="long submit" />	
						</label>
						<label id="disable" disable>
								<input id="orange" type="submit" value="Posten" class="long submit" />	
						</label>
					<form>
					
					<br />
					<p>Lange en grote buttons:</p>
					<form style="width:1200px;">
						<label id="disable" disable>
							<input type="submit" value="Posten" class="big long submit"/>	
						</label>
						<label id="disable" disable>
								<input id="red" id="big" type="submit" value="Posten" class="big long submit" />	
						</label>
						<label id="disable" disable>
								<input id="green" type="submit" value="Posten" class="big long submit" />	
						</label>
						<label id="disable" disable>
								<input id="blue" type="submit" value="Posten" class="big long submit" />	
						</label>
						<label id="disable" disable>
								<input id="orange" type="submit" value="Posten" class="big long submit" />	
						</label>
					<form>
					
					<br />
					<p>Kleine buttons:</p>
					<form style="width:1200px;">
						<label id="disable" disable>
							<input type="submit" value="Posten" class="small submit"/>	
						</label>
						<label id="disable" disable>
								<input id="red" id="big" type="submit" value="Posten" class="small submit" />	
						</label>
						<label id="disable" disable>
								<input id="green" type="submit" value="Posten" class="small submit" />	
						</label>
						<label id="disable" disable>
								<input id="blue" type="submit" value="Posten" class="small submit" />	
						</label>
						<label id="disable" disable>
								<input id="orange" type="submit" value="Posten" class="small submit" />	
						</label>
					<form>
					
					<br />
					<p>Kleine grote buttons:</p>
					<form style="width:1200px;">
						<label id="disable" disable>
							<input type="submit" value="Posten" class="small-big submit"/>	
						</label>
						<label id="disable" disable>
								<input id="red" id="big" type="submit" value="Posten" class="small-big submit" />	
						</label>
						<label id="disable" disable>
								<input id="green" type="submit" value="Posten" class="small-big submit" />	
						</label>
						<label id="disable" disable>
								<input id="blue" type="submit" value="Posten" class="small-big submit" />	
						</label>
						<label id="disable" disable>
								<input id="orange" type="submit" value="Posten" class="small-big submit" />	
						</label>
					<form>
					
					<br />
					<p>Kleine Lange buttons:</p>
					<form style="width:1200px;">
						<label id="disable" disable>
							<input type="submit" value="Posten" class="small-long submit"/>	
						</label>
						<label id="disable" disable>
								<input id="red" id="big" type="submit" value="Posten" class="smal-long submit" />	
						</label>
						<label id="disable" disable>
								<input id="green" type="submit" value="Posten" class="small-long submit" />	
						</label>
						<label id="disable" disable>
								<input id="blue" type="submit" value="Posten" class="small-long submit" />	
						</label>
						<label id="disable" disable>
								<input id="orange" type="submit" value="Posten" class="small-long submit" />	
						</label>
					<form>
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