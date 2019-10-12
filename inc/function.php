<?php
//controllo se utente è loggato
function isLog(){
	if(isset($_SESSION['email'])) {
		return TRUE;
	}else{
		return FALSE;
	}
}

//controllo che sia un amministratore
function isAdmin(){
	if(isLog() && $_SESSION["type"]==1) {
		return TRUE;
	}else{
		return FALSE;
	}
}

function logOut(){
	session_unset();
	session_destroy();

	//rimando all'area riservata
	header('location:/index.php');
}

//Print_r ($_SESSION);

?>
