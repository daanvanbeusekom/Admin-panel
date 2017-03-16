<?php
$page_title = "Indexbeheer";
$page_name = "Media";
$local_page = "<i class='fa fa-picture-o'>&nbsp;</i>Media / Upload";
include "top_admin.php";

if($_SESSION['user_level'] == 1){
	
?>

<?php
$target_dir = "IMG/UPLOAD/OEFENING/DSC_";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is een image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is niet een image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file bestaat al.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 800000) {
    echo "Sorry, jouw file is te groot.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, aleen JPG, JPEG, PNG & GIF files zijn toegestaan.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, jouw file is niet geuploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "De afbeelding ". basename( $_FILES["fileToUpload"]["name"]). " is geuploaded.";
		echo '<meta http-equiv="refresh" content="1; url=media.php">';
    } else {
        echo "Sorry, er was een error uploading jouw afbeelding.";
    }
}
?>

<FORM>
			<INPUT Type="button" VALUE="Terug" onClick="history.go(-1);return true;">
		</FORM>


<?php
}else{
?>

<h1>Forbidden</h1>
<p>You don't have permission to access /admin/upload.php
on this server.</p>
<hr>
<address>Apache/2.4.1 Server at www.thomunderground.nl Port 80</address>
<?php
}
?>