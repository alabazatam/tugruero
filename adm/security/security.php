<?php
if(!isset($_SESSION['id_user']) or !isset($_SESSION['id_perms'])){
	
	header("Location:".full_url."/adm/errors_pages/login_required.php");	
} 

