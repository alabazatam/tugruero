<?php
if(!isset($_SESSION['id_user']) or !isset($_SESSION['id_perms'])){
	
	header("Location: ../errors_pages/login_required.php");	
} 

