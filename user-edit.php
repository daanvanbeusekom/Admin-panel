<?php
$page_title = "Indexbeheer";
$page_name = "Persoonlijk";
$local_page = "<i class='fa fa-wrench'>&nbsp;</i>Instellingen / Persoonlijke Instellingen";
include "top_admin.php";

if($_SESSION['user_level'] == 1){
	
$user_id = $_GET['user'];

$SQL = "SELECT user_name, user_id, user_theme, user_img, user_email, user_age FROM users WHERE user_id = '" . $user_id . "'";
$result = $connection_WB->query($SQL);
$row = $result->fetch_assoc();
	
?>

<div id="welcome_message">
	<article>
		<p>
		<h3>Kleurenthema wijzigen:</h3>
		<form method="POST" action="user-edit_process.php" class="new_post" id="color_form">
			<label id="color_label">
				<div class="color-option ">
				<input type="radio" name="gender" name="post_title" value="normal" id="user_theme">
				<table class="color-palette" style="margin-top:0px;">
				<label for="admin_color_midnight">Standaard</label>
					<tbody><tr disable>
									<td style="background-color: #e5e5e5">&nbsp;</td>
									<td style="background-color: #999">&nbsp;</td>
									<td style="background-color: #3c8dbc">&nbsp;</td>
									<td style="background-color: #00a65a">&nbsp;</td>
								</tr>
				</tbody></table>
                </input>
				</div>
			</label>
			
			<label id="color_label">
				<div class="color-option ">
				<input type="radio" name="gender" name="post_title" value="red-dark" id="user_theme">
				<table class="color-palette" style="margin-top:0px;">
				<label for="admin_color_midnight">Middernacht</label>
					<tbody><tr disable>
									<td style="background-color: #25282b">&nbsp;</td>
									<td style="background-color: #363b3f">&nbsp;</td>
									<td style="background-color: #69a8bb">&nbsp;</td>
									<td style="background-color: #e14d43">&nbsp;</td>
								</tr>
				</tbody></table>
				</input>
				</div>
			</label>
			
			<label id="color_label">
				<div class="color-option ">
				<input type="radio" name="gender" name="post_title" value="oceaan" id="user_theme">
				<table class="color-palette" style="margin-top:0px;">
				<label for="admin_color_midnight">Oceaan</label>
					<tbody><tr disable>
									<td style="background-color: rgb(98, 124, 131);">&nbsp;</td>
									<td style="background-color: #738e96">&nbsp;</td>
									<td style="background-color: rgb(158, 186, 160);">&nbsp;</td>
									<td style="background-color: #aa9d88">&nbsp;</td>
								</tr>
				</tbody></table>
				</input>
				</div>
			</label>
			
			<label id="color_label">
				<div class="color-option ">
				<input type="radio" name="gender" name="post_title" value="light-blue" id="user_theme">
				<table class="color-palette" style="margin-top:0px;">
				<label for="admin_color_midnight">Light Blauw</label>
					<tbody><tr disable>
									<td style="background-color: #096484">&nbsp;</td>
									<td style="background-color: #4796b3">&nbsp;</td>
									<td style="background-color: #52accc">&nbsp;</td>
									<td style="background-color: #74B6CE">&nbsp;</td>
								</tr>
				</tbody></table>
				</input>
				</div>
			</label>
			
			<label id="disable" disable>
				<input type="hidden" value="<?php echo $user_id ?>" name="user_id" />
				<input type="submit" value="Bijwerken" class="submit" />
			</label>
			</p>
		</form>
	</article>
	<article>
		<p>
		<h3>Profiel wijzigen:</h3>
		<br />
		<div id="name_change_right">
			<form method="POST" action="name-edit.php" class="new_post" enctype="multipart/form-data">
					<label for="user_name">
						<p><span>Gebruikersnaam:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
						<input style="margin-left:500px; margin-top:-24px;" type="text" name="user_name" id="user_name" value="<?php echo $row['user_name'] ?>" /><br/>
					</label>
					
					<label for="user_age">
						<p><span>Leeftijd:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
						<input style="margin-left:500px; margin-top:-24px;" type="date" name="user_age" id="user_age" value="<?php echo $row['user_age'] ?>" /><br/>
					</label>
					
					<label for="user_email">
						<p><span>E-mail adress:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
						<input style="margin-left:500px; margin-top:-24px;" type="text" name="user_email" id="user_email" value="<?php echo $row['user_email'] ?>" /><br/>
					</label>
					
					<label for="user_img">
						<p><span>Profiel foto:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
						<a class="example-image-link" href="<?php echo $row['user_img'] ?>" data-lightbox="Galerij"><img class="example-image" style="margin-left:500px; margin-top:-24px;" src="<?php echo $row['user_img'] ?>" /></a><input type="file" name="fileToUpload" id="fileToUpload" style="margin-left:503px; margin-top:5px;"><br/>
					</label>
					
					<label for="user_pass">
						<p><span>Wachtwoord:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
					</label>
					
					<label for="password_old" style="margin-left:500px; margin-top:-28px;">
						<span>Oud&nbsp;wachtwoord:</span>
						<input type="password" name="user_pass_old" id="password_old">
					</label>
					
					<label for="password" style="margin-left:500px;">
						Wachtwoord:
						<input type="password" name="user_pass" id="password">
					</label>
					<label for="password_check" style="margin-left:500px; margin-top:px;">
						Herhaal Wachtwoord:
						<input type="password" name="user_pass_check" id="password_check">
					</label>
					
					<label id="disable" disable>
					<input type="hidden" value="<?php echo $user_id ?>" name="user_id" />
					<input type="submit" value="Bijwerken" class="submit" />
				</label>
			</form>
		</div>
	</article>
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