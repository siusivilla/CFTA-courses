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
function password_generate($chars) 
{
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz!?~@#-_+<>[]{}';
  /* substr ( string $string , int $start [, int $length ] ) : string
  substr Returns the portion of string specified by the start and length parameters.
  str_shuffle ( string $str ) : string
  str_shuffle() shuffles a string. One permutation of all possible is created.
  */
  return substr(str_shuffle($data), 0, $chars);
}

?>
