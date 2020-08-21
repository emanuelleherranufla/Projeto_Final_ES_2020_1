<?php
#controlador responsável pelo logout do usuário no site
	unset($_SESSION['email']);
	header('location:../index.html');
?>