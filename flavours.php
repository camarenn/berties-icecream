<?php include 'includes/header.php'; ?>

<?php include 'includes/footer.php'; ?>

<!DOCTYPE html> 
<html>
<head>
<meta charset="utf-8">
<link type="text/css" rel="stylesheet" href="css/style.css"/>
<script src="js/main.js"></script>
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

	<div class="featuredFlavour">
		<!-- Image for featured flavour -->
		<p id="featFlavText">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed aliquam aliquet mi, ut laoreet elit cursus vel. Suspendisse eget auctor erat. Donec semper diam ac fringilla hendrerit. Donec tincidunt commodo turpis id mollis. Pellentesque feugiat feugiat orci, at sollicitudin massa dignissim in.</p>
	</div>

	<div class="searchBar">
		<form id="search" action="flavours.php" method="GET">
			<input id="search" type="text" placeholder="Type here">
			<input id="submit" type="submit" value="Search">
		</form>
	</div>


	<!-- After the search bar the images of the flavours alone with the like and dislike buttons go here -->

	<!-- This is the pop up form for the flavour suggestion ** Still needs a close popup button** -->

	<div id="flavourForm">
		<!-- Popup Div Starts Here -->
		<div id="popupFlavourSuggest">
			<!-- Contact Us Form -->
			<form action="flavours.php" id="flavourSuggest" method="post">
			<h2>Suggest a flavour</h2>
			<hr>
			<input id="name" name="name" placeholder="Enter your name" type="text">
			<input id="email" name="email" placeholder="Enter your email" type="text">
			<textarea id="flavSuggest" name="flavourSuggestion" placeholder="Enter your flavour suggestion here"></textarea>
			<a href="javascript:%20check_empty()" id="submit">Send</a>
			<button onclick="self.close();">Close Me</button>
			</form>
		</div>
	<!-- Popup Div Ends Here -->
	</div>
	<!-- Display Popup Button -->
	<button id="popupFlavour" onclick="div_show()">Suggest a flavour</button>

	<div class="mailList">
		<h3 class="joinMail">JOIN OUR MAILING LIST</h3>
		<h5>THE LATEST NEWS, RECIPES AND COMPETITIONS SENT STRAIGHT TO YOUR MAILBOX</h5>
		<form method='POST' action='subscribe.php'>
			<input type='text' email='email' placeholder='Enter your email' required>
			<input type='submit' value='Join'/>
		</form>
	</div>

	<!-- The PHP needs to be added here and adjusted according to the database and tables for both the flavour suggestion form and the email subscription-->

</body>
</html>