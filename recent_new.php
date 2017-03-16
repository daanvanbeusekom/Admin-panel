<?php
$page_title = "Indexbeheer";
$page_name = "Recent";
$local_page = "<i class='fa fa-clock-o'>&nbsp;</i>Recent / Nieuwe Gebeurtenis";
include "top_admin.php";

if($_SESSION['user_level'] == 1){
	
check_signed_in();
check_admin();
	
?>

			<div id="welcome_message">
				<h2> Hier kan je nieuwe gebeurtenissen toevoegen.</h2>
				
				<br />
				
				<form method="POST" action="new_recent_progress.php" class="new_recent">
					<label for="recent_name">
						<p><span>Gebeurtenis:</span></p>
						<input type="text" name="recent_name" id="recent_name" placeholder="Bijv. Nieuwe gebruiker" required />
					</label>
					<label>
						<input type="submit" value="Plaatsen" class="submit" />
					</label>
				</form>
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