<?php

$page_title = "Indexbeheer";
$page_name = "Gebruikers";
$local_page = "<i class='fa fa-user'>&nbsp;</i>Gebruikers / Gebruiker Verwijderen";
include "top_admin.php";

check_signed_in();
check_admin();

$user_id = $_GET['user'];

$SQL = "SELECT user_id, user_name, user_pass, user_email, user_age, user_date, user_level FROM users WHERE user_id = '" . $user_id . "'";

$result = $connection_WB->query($SQL);

$sql = "DELETE FROM users WHERE user_id = '" . $user_id . "'";
$result = $connection_WB->query($sql);

$sql = "INSERT INTO recent(recent_name) VALUES ('Gebruiker verwijderd') ";
        $result = $connection->query($sql);

if(!$result){
	echo '<p>Mmm er is iets mis gegaan. Probeer het eens opnieuw.</p>';
}else{
	echo '<div class="modal-content-2"><div class="modal-body-2"><span class="close">&times </span><p>Het account is succesvol gedelete.</p></div>';
	echo '<meta http-equiv="refresh" content="2; url=users.php">';
}

include "bottom.php";
?>