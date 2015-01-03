<?php
	
	if(isset($_SESSION['loggedIn'])){
		if($_SESSION['loggedIn'] == '0'){
			header('Location: index.php');
		}
		else{
			header('Location: subscribers.php');
		}
	}
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<title>Splash Fit - The Gym</title>
<link type="text/css" href="stylesheets/common.css" rel="stylesheet" />
</head>
<body>
	<div class="connections">
    	<div class="connection-icons">
            <ul>
                <li><a href="http://www.facebook.com/profile.php?id=100001502215973"><img src="images/fb-icon.png" alt="Facebook" border="0" /></a></li>
                <li><a href="http://twitter.com/#!/splashfit"><img src="images/tw-icon.png" alt="Twitter" border="0" /></a></li>
                <li><a href="#"><img src="images/yt-icon.png" alt="YouTube" border="0" /></a></li>
            </ul>
        </div>
    </div>
	<div class="header">
    	<div class="header-content">
            <img src="images/logo.png" alt="Gym Logo" />
            <div class="top-menu">
            	<ul>
                	<li><a href="http://www.splashfit.co.uk">SPLASHFIT.CO.UK</a></li>
                    <li><a href="gym/contact.htm">CONTACT US</a></li>
                    <li><a href="gym/testimonials.php">TESTIMONIALS</a></li>
                    <li><a href="gym/links.php">LINKS</a></li>
                </ul>
            </div>
            <div class="tabs">
            	
            </div>
        </div>
    </div>
    <div class="tab-bar">
    	<div class="tab-bar-content">

        </div>
    </div>
    <div class="breadcrumbs">
    	<div class="breadcrumbs-content">
        	LOGIN
        </div>
    </div>
    <div class="spacer">
    
    </div>
    
    <div class="content">
    	<div class="columns">
        	<div style="width: 420px; position: absolute; left: 60px; top: 10px;">
            	<div style="position: absolute; left: -60px; top: 0px; z-index: -1;">
                	<img src="images/Gym-Logo-Faded.png" alt="Gym Logo" />
                </div>
            	<h2>Log In</h2>
                <form method="post" action="login.php">
                	<table cellpadding="5">
                        <tr>
                            <td>User name</td>
                            <td>
                                <input type="text" name="un" id="un" size="30" />
                            </td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td>
                                <input type="password" name="pw" id="pw" size="30" />
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" align="right">
                                <br />
                                <input type="submit" value="Log in" style="width: 60px;" />
                            </td>
                        </tr>
                    </table>
                </form>
                <br />
                <br />
                <span style="color: red;">
					<?php
                        if(isset($_GET['error'])){
                            if(($_GET['error']) == 'y'){
                                echo('Wrong username or password');
                            }
                        }
                    ?>
                </span>
            </div>
            <div style="width: 420px; position: absolute; left: 560px; top: 10px;">
            	
            </div>
        </div>
    </div>
</body>
</html>
