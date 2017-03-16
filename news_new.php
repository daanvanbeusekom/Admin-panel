<?php

$page_title = "Indexbeheer";
$page_name = "Nieuw nieuws";
$local_page = "<i class='fa fa-commenting-o'></i>&nbsp;Berichten / Nieuw";
include "top_admin.php";

if($_SESSION['user_level'] == 1){


?>

    <div id="messages_message">
        <form method="POST" action="new_news_process.php" class="new_post" style="min-width:100%">
		<label for="post_title">
            <p><span>Titel:</span></p>
			<input type="text" name="post_title" id="post_title" required />
		</label>
		<label for="post_content" style="min-width:100%; min-height:100%;">
            <p><span>Content:</span></p>
			<textarea name="post_content" id="post_content"></textarea>
		</label>
		<label for="post_category">
            <p><span>Categorie:</span></p>
			<select name="post_category" id="post_category">
			<?php
				$sql = "SELECT category_id, category_name FROM categories";
				$result = $connection_WB->query($sql);
				
				while($row = $result->fetch_assoc()){
					echo "<option value=" . $row['category_id'] . ">";
					echo $row['category_name'];
					echo "</option>";
				}
			?>
			</select>
		</label>
		<label>
		      <input type="submit" value="Posten" class="submit" />
        </label>
	</form>
                <p><span style="float:right; margin-top:-25px;">Je mag html tags gebruiken: &ltb&gt, &ltu&gt, &lti&gt</span></p>

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


