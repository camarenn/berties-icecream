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

<!-- This is where the header image goes	
	<img src="header.ig" id="headerImage"> 
-->

	<div class="missionStatement">
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed aliquam aliquet mi, ut laoreet elit cursus vel. Suspendisse eget auctor erat. Donec semper diam ac fringilla hendrerit. Donec tincidunt commodo turpis id mollis. Pellentesque feugiat feugiat orci, at sollicitudin massa dignissim in. Mauris erat nulla, semper ac nulla non, vulputate cursus erat. Sed et magna felis. Quisque vel efficitur justo, sed dictum est. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec placerat, felis sed pharetra mollis, felis tellus congue ligula, vel vehicula mauris neque sed mi.

		Suspendisse mauris nisl, pretium at purus ut, mattis lobortis nisi. Fusce risus nibh, tristique eu lectus quis, porttitor malesuada mauris. Praesent lorem lectus, mollis dictum velit tristique, malesuada congue magna. Suspendisse sed nibh fringilla, venenatis nunc non, posuere est. Etiam semper vulputate neque, sed porttitor elit hendrerit in. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sit amet rhoncus neque. Vestibulum semper rutrum lacus quis ullamcorper. Aenean bibendum nunc feugiat nunc tincidunt, at ultrices lacus convallis. Nulla facilisi. Praesent gravida neque nisi, sed sodales urna dictum a. Quisque sollicitudin, neque non ultrices tempor, orci justo vulputate eros, at dignissim massa turpis vel odio. Suspendisse iaculis ante at nulla sollicitudin, nec volutpat erat pretium. Nullam vitae elementum nisi, non bibendum quam. Cras auctor vestibulum risus, nec venenatis urna auctor sollicitudin.</p>
	</div>

	<div class="popularFlavours">
		<h2 id="awesomeFlavours">Here are some of our awesome flavours</h2>
		<!-- Insert picture of popular flavours here -->
	</div>

	<!-- Link the database here -->

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