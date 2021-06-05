<?php
session_start();

$_SESSION["id"]='';
				$_SESSION["username"]='';
				$_SESSION["fullname"]='';
				$_SESSION["lvl"]='';
				

unset($_SESSION['id']);
unset($_SESSION['username']);
unset($_SESSION['fullname']);
unset($_SESSION['lvl']);



session_unset();
session_destroy();
header('Location:index.php');

?>