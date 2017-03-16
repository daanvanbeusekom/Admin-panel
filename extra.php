<?php
$page_title = "Indexbeheer";
$page_name = "Extra";
$local_page = "<i class='fa fa-wrench'>&nbsp;</i>Extra /";
include "top_admin.php";

if($_SESSION['user_level'] == 1){
	
?>
				
				<div id="welcome_message">
					<h2> Hier vind je de extra onderdelen.</h2>
					<p>Je kan ze actieveren door contact op te nemen met de maker. Of door zelf het script aan te passen (niet aan te raden).</p>
					
					<br />
					
					<p>Extra functies:</p>
						<p>&nbsp; Mailen (béta)</p>
						<p>&nbsp; File editor (nog niet geïnstaleerd)</p>
						<p>&nbsp; Extra body</p>
						<p>&nbsp; Media player</p>
						
					<br />
					<br />
					
					<p>De extra body kan je actieveren door in de wide_stylesheet.css de volgende regel aan te passen</p>
					<br />
					<p>
						
						#middle_body_wrapper{
						width: 1200px;
						max-width:1200px;
						height: auto;
						<br />
						float:center;
						margin: 0 auto;
						position: center;
						}
					</p>
					<br />
					<p> Verander het in het volgende :</p>
					<br /><p>
					
						#middle_body_wrapper{
						width: 1200px;
						max-width:1200px;
						height: auto;
						<br />
						background-color:rgba(22,22,22,0.3);
						float:center;
						margin: 0 auto;
						position: center;
						}
					</p>
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