<?php

	include('connect/db_connection.php');
	
	if(isset($_POST['name'])){
		$sql = "INSERT INTO splashfit_customerList (CustomerName, Email) VALUES ('" . $_POST['name'] . "', '" . $_POST['email'] . "')";
	
		mysql_query($sql);
	}
	mysql_close($conn);

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
                    <li><a href="contact.htm">CONTACT US</a></li>
                    <li><a href="testimonials.php">TESTIMONIALS</a></li>
                    <li><a href="links.php">LINKS</a></li>
                </ul>
            </div>
            <div class="tabs">
            	<ul>
                	<li class="tabs-current"><a href="index.htm">HOME</a></li>
                    <li><a href="classinfo.htm">CLASS INFO</a></li>
                    <li><a href="activities.htm">ACTIVITIES</a></li>
                    <li><a href="schools.htm">SCHOOLS</a></li>
                    <li><a href="news.php">NEWS</a></li>
                    <li><a href="gallery.htm">GALLERY</a></li>
                    <li>SHOP</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="tab-bar">
    	<div class="tab-bar-content">

        </div>
    </div>
    <div class="breadcrumbs">
    	<div class="breadcrumbs-content">
        	
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
            	<h2>Email Subscription</h2>
                Thank you for choosing to sign up to our email subscritpion. Please click <a href="index.htm">here</a> to return to the home page
            </div>
            <div style="width: 420px; position: absolute; left: 560px; top: 10px;">
            	
            </div>
        </div>
    </div>
</body>
</html>
