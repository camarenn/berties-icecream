<?php include 'includes/header.php'; ?>

<?php include 'includes/footer.php'; ?>

<!DOCTYPE html> 
<html>
<head>
<meta charset="utf-8">
<link type="text/css" rel="stylesheet" href="style.css"/>
	<title>Bertie's Ice Cream</title>
</head>
<body>
	<div class="navbar">
		<ul class="nav">
		<li><a href="index.php">Home</a></li>
        <li><a href="flavours.php">Flavours</a></li>
        <li><a href="aboutUs.php">About Us</a></li>
        <li><a href="contactUs.php">Contact Us</a></li>
    </ul>
	</div>

	<div class="mailList">
		<h3 class="joinMail">JOIN OUR MAILING LIST</h3>
		<h5>THE LATEST NEWS, RECIPES AND COMPETITIONS SENT STRAIGHT TO YOUR MAILBOX</h5>
		<form method='POST' action='subscribe.php'>
			<input type='text' email='email' placeholder='Enter your email' required>
			<input type='submit' value='Join'/>
		</form>
	</div>
	
</body>
</html>