<?php

$page_title = "Indexbeheer";
$page_name = "Gebruikers";
$local_page = "<i class='fa fa-user'>&nbsp;</i>Gebruikers / Nieuwe Gebruiker";
include "top_admin.php";

if($_SESSION['user_level'] == 1){

if($_SERVER['REQUEST_METHOD'] != 'POST'){
	//The form hasn't been send yet, so show the form
?>

				
				<div id="messages_message">
					<h2>Hier kan je een account toevoegen.</h2>
					
						<article>
							<header class="header_cyaan">
								
							</header>
							<p>
								<form method="POST" action="new_user.php">
									<label for="username">
										<span>Gebruikersnaam:</span>
										<input type="text" name="user_name" id="username" required>
									</label>
									<label for="password">
										<span>Wachtwoord:</span>
										<input type="password" name="user_pass" id="password" required>
									</label>
									<label for="password_check">
										Herhaal Wachtwoord:
										<input type="password" name="user_pass_check" id="password_check" required>
									</label>
									<label for="email">
										<span>E-mail:</span>
										<input type="email" name="user_email" id="email" required>
									</label>
									<label for="age">
										<span>Leeftijd:</span>
										<input type="date" name="user_age" id="age" required>
									</label>
									<label for="submit">
										<input type="submit" value="Aanmaken" id="submit" class="submit">
									</label>
								</form>
							</p>
						</article>
				</div>
				
<?php

include "bottom_admin.php"

?>
				
<?php
}else{
	//So the form has been sent
	// 1. Check the Data
	// 2. refill if necessary
	// 3. Save in database
	
	$errors = array(); //Declare for later
	
	$user_name = $_POST['user_name'];
	$user_pass = sha1($_POST['user_pass']);
	$user_pass_check = sha1($_POST['user_pass_check']);
	$user_email = $_POST['user_email'];
	$user_age = $_POST['user_age'];
		
	
	//Check the user_name
	if(isset($user_name)){
        //the user name exists
        if(!ctype_alnum($user_name)){
            $errors[] = 'De gebruikersnaam mag alleen letters en cijfers bevatten.';
        }
		
        if(strlen($user_name) > 30){
            $errors[] = 'De gebruikersnaam mag niet langer zijn dan 30 tekens.';
        }
		
		$sql = "SELECT count(1) FROM users WHERE user_name='$user_name'";
		$result = $connection_WB->query($sql);
		$data = mysqli_fetch_array($result, MYSQLI_NUM);
		if($data[0] > 0){
			$errors[] = 'Deze gebruikersnaam bestaat al.';
		}
		
    }else{
        $errors[] = 'De gebruikersnaam mag niet leeg zijn.';
    }
	
	//Check the user_pass
	if(isset($user_pass)){
        if($user_pass != $user_pass_check){
            $errors[] = 'De twee wachtwoorden komen niet overeen.';
        }
    }else{
        $errors[] = 'Het wachtwoord mag niet leeg zijn.';
    }
	
	if(!empty($errors)){ /*check for an empty array, if there are errors, they're in this array (note the ! operator)*/
	
        echo '<p>Ojee, sommige velden zijn niet juist ingevuld. Klik <a href="new_user.php">hier</a> om het opnieuw te proberen.';
        echo '<ul class="sign_up">';
		
        foreach($errors as $key => $value){ /* walk through the array so all the errors get displayed */
            echo '<li>' . $value . '</li>'; /* this generates a nice error list */
        }
		
        echo '</ul></p>';
		
    }else{
        //the form has been posted without, so save it
        //notice the use of mysql_real_escape_string, keep everything safe!
        //also notice the sha1 function which hashes the password
		
        $sql = "INSERT INTO users(user_name, user_pass, user_email, user_age, user_date, user_level, user_theme, user_img)
                VALUES('$user_name','$user_pass','$user_email', '$user_age', NOW(), 1, 'normal', 'IMG/basic_profile_photo.png')";
                         
        $result = $connection_WB->query($sql);
        
        $sql = "INSERT INTO recent(recent_name) VALUES ('Nieuwe gebruiker') ";
        $result = $connection->query($sql);
        if(!$result){
            //something went wrong, display the error
            echo '<p class="error">Something went wrong while registering. Please try again later.</p>';
            echo $connection->error(); //debugging purposes, uncomment when needed
        }else{
            echo '<div class="modal-content-2"><div class="modal-body-2"><span class="close">&times </span><p>Account succesvol geregistreed.</p></div></div>';
			echo '<meta http-equiv="refresh" content="2; url=users.php">';
        }
    }
}

$_SESSION['no_aside'] = true;
?>

<?php
}else{

include "forbidden.php"
?>

<?php
}
?>