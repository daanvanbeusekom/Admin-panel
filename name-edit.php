<?php

$page_title = "Edit Home";
include "top.php";

check_signed_in();
check_admin();


ini_set('display_errors', 'Off');
error_reporting(E_ALL);

echo '<div class="modal-content"><div class="modal-body"><span class="close">&times </span><p>';


$title = $connection->real_escape_string($_POST['user_name']);
$email = $connection->real_escape_string($_POST['user_email']);
$age = $connection->real_escape_string($_POST['user_age']);
$post_id = $_POST['user_id'];

//Make the dir with the currently date
$name = date("d-m-Y");
mkdir("PROFILE/" . $name ."");

//Upload the photo
$target_dir = "PROFILE/" . $name ."/";
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
	$target_file_upload = $target_dir . basename($_FILES["fileToUpload"]["name"]);
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
    echo '<p>Sorry, aleen JPG, JPEG, PNG & GIF files zijn toegestaan.</p><br />';
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo '<p>Sorry, jouw file is niet geuploaded.</p><br />';
	$target_file_upload = ''. $_SESSION['user_img'] .'' ;
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo '<p>De afbeelding ". basename( $_FILES["fileToUpload"]["name"]). " is geuploaded.</p><br />';
		$target_file_upload = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    } else {
        echo "Sorry, er was een error uploading jouw afbeelding.";
    }
}

//Changing the password
if( !isset( $_POST['user_pass_old'] ) || trim( $_POST['user_pass_old'] ) == '' )
        $errors[] = 'Het oude wachtwoord is niet ingevoerd.';
    if( !isset( $_POST['user_pass'] ) || trim( $_POST['user_pass'] ) == '' )
        $errors[] = 'Het nieuwe wachtwoord is niet ingevoerd.';
    if( !isset( $_POST['user_pass_check'] ) || trim( $_POST['user_pass_check'] ) == '' )
        $errors[] = 'Je moet het nieuwe wachtwoord bevestigen.';
    if( isset( $_POST['user_pass'], $_POST['user_pass_check'] ) && $_POST['user_pass'] != $_POST['user_pass_check'] )
        $errors[] = 'Het nieuwe wachtwoord is niet juist bevestigd.';
	
if( count( $errors ) > 0 )
    {
		    }
    else{
		$sql = "UPDATE users SET user_pass = '" . sha1( $_POST['user_pass'] ) . "' WHERE user_id = '" . $post_id . "'";
		$result2 = $connection_WB->query($sql);
	}
    
//Update the database with the new stuff
$sql = "UPDATE users SET user_name = '" . $title . "', user_email = '" . $email . "', user_age = '" . $age . "', user_img = '" . $target_file_upload . "'  
WHERE user_id = '" . $post_id . "'";

$result = $connection_WB->query($sql);


if(!$result){
	echo '<div class="modal-content"><div class="modal-body"><span class="close">&times </span><p>Mmm er is iets mis gegaan. Probeer het eens opnieuw.</p></div></div>';
	echo '<meta http-equiv="refresh" content"3; url=user-edit.php';
}else{
	echo 'Het profiel is succesvol bijgewerkt.<br/> U word nu uitgelogd om de bewerking te verwerken.</p></div></div>';
	echo '<meta http-equiv="refresh" content="3; url=sign_out.php">';
}

include "bottom.php";

?>