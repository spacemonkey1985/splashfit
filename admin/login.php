<?php

	if(isset($_POST['un']) && isset($_POST['pw'])){
		if($_POST['un'] == 'admin' && $_POST['pw'] == 'splashAdmin987'){
			session_start(); 
			$_SESSION['loggedIn'] = 1;
			header('Location: subscribers.php');
		}
		else{
			session_start(); 
			$_SESSION['loggedIn'] = 0;
			header('Location: index.php?error=y');
		}
	}

?>