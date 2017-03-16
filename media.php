<?php
$page_title = "Indexbeheer";
$page_name = "Media";
$local_page = "<i class='fa fa-picture-o'>&nbsp;</i>Media /";
include "top_admin.php";

if($_SESSION['user_level'] == 1){
	
?>
				
				<div id="welcome_message">
				<p>Je kan alleen .png, .jpg of .gif bestanden uploaden</p>
				<br />
				<p>Upload hier de foto van het idee!</p>
				<br/>
				<p>Is het toch een ander type bestand? Klik dan <a href="http://image.online-convert.com/convert-to-png">hier</a> om hem gratis te converteren.</p>
						<form action="upload.php" method="post" enctype="multipart/form-data">
							<input type="file" name="fileToUpload" id="fileToUpload">
							<br />
							<input type="submit" value="Upload Image" name="submit">
						</form>
				<br />
				<br />
                <p>De afbeeldingen die momenteel op de site staan!</p>
					<?php

						$dir = opendir('../IMG/UPLOAD/IDEE');
							// Haal de gegevens uit dir
							while (false !== ($file = readdir($dir))) {
								if (($file !== ".") and ($file !== "..")) {
								list($filename, $ext) = explode(".", $file);
							if ($ext == "jpg" or $ext == "png" or $ext == "gif") {
									echo "<a class='fancybox-thumbs' data-fancybox-group='thumb' href='../IMG/UPLOAD/IDEE/$file'><img height='300' src=\"../IMG/UPLOAD/IDEE/$file\"></a>";  
								echo"\n";
							}
						}
					}
					?>
						
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