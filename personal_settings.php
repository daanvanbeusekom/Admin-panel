<?php
$page_title = "Indexbeheer";
$page_name = "Persoonlijk";
$local_page = "<i class='fa fa-wrench'>&nbsp;</i>Instellingen / Persoonlijke Instellingen";
include "top_admin.php";

if($_SESSION['user_level'] == 1){
	
$user_id = $_GET['post'];

$SQL = "SELECT user_name, user_id, user_theme FROM users WHERE user_id = '" . $user_id . "'";
$result = $connection_WB->query($SQL);
$row = $result->fetch_assoc();
	
?>

<article>
	<p>
	<form method="POST" action="personal_edit_process.php" class="new_post">
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
		<label>
			<input type="hidden" value="<?php echo $user_id ?>" name="user_id" />
			<input type="submit" value="Bijwerken" class="submit" />
		</label>
		</p>
	</form>
</article>

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