<?php

$page_title = "Indexbeheer";
$page_name = "Berichten";
$local_page = "<i class='fa fa-commenting-o'></i>&nbsp;Berichten / Bewerken";
include "top_admin.php";

if($_SESSION['user_level'] == 1){

$post_id = $_GET['post'];

$SQL = "SELECT post_by, category_id, txt_title, txt_content, category_id FROM txt WHERE txt_id = '" . $post_id . "'";
$result = $connection_WB->query($SQL);
$row = $result->fetch_assoc();

?>

<div id="messages_message">
            <form method="POST" action="txt_edit_process.php" class="new_post" style="min-width:100%">
                <label for="home_title">
                    <p><span>Titel:</span></p>
                    <input type="text" name="post_title" id="post_title" value="<?php echo $row['txt_title'] ?>" required />
                </label>
                <label for="post_content" style="min-width:100%; min-height:100%;">
                    <p><span>Content:</span></p>
                    <textarea rows="30" cols="75" name="post_content" id="post_content" required><?php echo $row['txt_content'] ?></textarea>
                </label>
                <label for="post_category">
                    <p><span>Categorie:</span></p>
                    <select name="post_category" id="post_category">
                    <?php
                        $sql = "SELECT category_id, category_name FROM categories";
                        $result = $connection_WB->query($sql);

                        while($row2 = $result->fetch_assoc()){
                            echo "<option value='" . $row2['category_id'] . "'";
                            if($row2['category_id'] == $row['category_id']){ 
                                echo " selected='selected' "; 
                            } 
                            echo ">";
                            echo $row2['category_name'];
                            echo "</option>";
                        }
                    ?>
                    </select>
                </label>
                <label>
                    <input type="hidden" value="<?php echo $post_id ?>" name="post_id" />
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
