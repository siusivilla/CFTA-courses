<?php
function isLog(){
	if(isset($_SESSION['err']) AND $_SESSION["err"]==0) {
		return TRUE;
	}else{
		//rimando alla home
		return FALSE;
	}
}
function reservedArea(){
	if(!isset($_SESSION['err']) OR $_SESSION["err"]==1) {
		header('location:../user/signin.php');
	} else{
		$isLog = "registrato";
	}
}

function logOut(){
	session_unset();
	session_destroy();

	//rimando all'area riservata
	header('location:/index.php');
}
// Print_r ($_SESSION);

?>
