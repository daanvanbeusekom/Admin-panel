<?php

$page_title = "Indexbeheer";
include "top.php";

if($_SESSION['user_level'] == 1){
?>
<center>
<p>
	Je bent al in ingelogd. Klik <a href="sign_out.php">hier</a> om uit te loggen.
	<br/>
	<br/>
	Of ga naar het <a href="admin.php"> admin paneel </a>.
</p>
</center>
<?php
}else{
	if($_SERVER['REQUEST_METHOD'] != 'POST'){
?>

 <body>

<div class="wrapper">
  <form class="login" method="POST" action="index.php">
    <p class="title">Inloggen</p>
	
	<label for="username">
		<input type="text" placeholder="Gebruikersnaam" name="user_name" id="username" required autofocus>
		<i class="fa fa-user"></i>
	</label>
	
	<label for="password">
		<input type="password" placeholder="Wachtwoord" name="user_pass" id="password" required />
		<i class="fa fa-lock"></i>
	</label>
	
	<div id="forget">
		<a href="mailto:daanvanbeusekom@outlook.com">Je wachtwoord vergeten?</a>
		<br />
	</div>
		
    <button>
      <i class="spinner" class="submit" type="submit"></i>
      <span class="state" id="myBtn">Log in</span>
    </button>
  </form>
  </p>
	<div id="back">
		<a href="../index.php"><i class="fa fa-arrow-left"></i>&nbsp;Ga terug naar On My Way</a>
	</div>
</div>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>   


<?php
	}else{
		//The Form has been post
		
		//Get variables
		$user_name = $_POST['user_name'];
		$user_pass = sha1($_POST['user_pass']);
	
		//create error Array
		$errors = array();
	
		if(!isset($user_name)){
			$errors[] = 'De gebruikersnaam is niet ingevuld.';
		}
		
		if(!isset($user_pass)){
			$errors[] = 'Het wachtwoord is niet ingevuld.';
		}
		
		//Check if there are errors
		if(!empty($errors)){
			echo '<div class="modal-content"><div class="modal-body"><span class="close">&times </span><p>Ojee, sommige velden zijn niet juist ingevuld. Klik <a href="index.php">hier</a> om het opnieuw te proberen.</p></div></div>';
			echo '<ul class="sign_in">';
			
			foreach($errors as $key => $value){ /* walk through the array so all the errors get displayed */
				echo '<li>' . $value . '</li>'; /* this generates a nice error list */
			}
			
			echo '</ul></p>';
		}else{
			//Check the database
			
			$sql = "SELECT user_id, user_name, user_level, user_theme, user_img FROM users WHERE user_name ='$user_name' AND user_pass ='$user_pass'";
			$result = $connection_WB->query($sql);
			
			if(!$result){
				echo $connection->error;
			}else{
				if($result->num_rows == 0){
					echo '<div class="modal-content"><div class="modal-body"><span class="close">&times </span><p>Combinatie is niet juist.</p></div></div>';
					header('Refresh: 2; url=index.php');
				}else{
					//set the $_SESSION['signed_in'] variable to TRUE
                    $_SESSION['signed_in'] = true;
                     
                    //we also put the user_id and user_name values in the $_SESSION, so we can use it at various pages
                    while($row = mysqli_fetch_assoc($result))
                    {
                        $_SESSION['user_id']    = $row['user_id'];
                        $_SESSION['user_name']  = $row['user_name'];
                        $_SESSION['user_level'] = $row['user_level'];
						$_SESSION['user_theme'] = $row['user_theme'];
						$_SESSION['user_img']   = $row['user_img'];
                    }
                     
                    echo ' <div class="modal-content"><div class="modal-body"><span class="close">&times </span><p>Welkom, ' . $_SESSION['user_name'] . '. <a href="index.php">Ga naar het overzicht.</a>.</p></div></div>';
					header('Refresh: 2; url=admin.php');
				}
			}
		}
		
	}
}


$_SESSION['no_aside'] = true;
?>

<?php
include "bottom.php";
?>