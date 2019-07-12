<?phpversion
<head>
<title>CONNECT</title>
<link href="styleconn.css" rel="stylesheet" type="text/css">
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<style>
body
{
	background-image:linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(vk.jpg);
	height: 50vh;
	background-size: cover;
	background-position: center";
}
</style>

<body>
		<div class="menubar" style="top: 0px;">
		<div class="left">
            <nav class="clearfix1" style="margin-left: 230;">
              
                <ul class="main-nav">
				<li class="current"><a href="connect.php">CONNECT</a></li>
                <li><a href="famvids.php">FAMOUS VIDEOS</a></li>
				<li><a href="ach.php">ACHIEVEMENTS</a></li>
				<li><a href="skill.php">COMPARISON</a></li>
				<li><a href="stats.php">STATS</a></li>
				<li><a href="timeline.php">TIMELINE</a></li>
				<li ><a href="home.php">HOME</a></li>             
				</ul>
            </nav>  
		</div>
		</div>
		<h1>Connect with Virat</h1>
		<div class="container">
		<form action="insert.php" method="get">
			<div class="row">
			<div class="colhead">
				<label for="fname">First Name</label>
			</div>
			<div class="colans">
				<input type="text" id="fname" name="firstname" required placeholder="Your first name...">
			</div>
	
			</div>
			<div class="row">
			<div class="colhead">
				<label for="lname">Last Name</label>
			</div>
			<div class="colans">
				<input type="text" id="lname" name="lastname" required placeholder="Your last name...">
			</div>
			</div>
			<div class="row">
			<div class="colhead">
				<label for="email">Email</label>
			</div>
			<div class="colans">
				<input type="text" id="email" name="email" required placeholder="Your email id...">
			</div>
			</div>
			<div class="row">
			<div class="colhead">
				<label for="phone">Phone Number</label>
			</div>
			<div class="colans">
				<input type="text" id="phone" name="phone" required placeholder="Your phone number...">
			</div>
			</div>
			<div class="row">
			<div class="colhead">
				<label for="country">Country</label>
			</div>
			<div class="colans">
				<select id="country" name="country" required placeholder="Country">
					<option value="Afghanistan">Afghanistan</option>
					<option value="Australia">Australia</option>
					<option value="Bangladesh">Bangladesh</option>
					<option value="England">England</option>
					<option value="India">India</option>
					<option value="NewZealand">New Zealand</option>
					<option value="Pakistan">Pakistan</option>
					<option value="SouthAfrica">South Africa</option>
					<option value="SriLanka">Sri Lanka</option>
				</select>
			</div>
			</div>
			<div class="row">
			<div class="colhead">
				<label for="message">Message</label>
			</div>
			<div class="colans">
				<textarea id="message" name="message" required placeholder="Write a message for Virat..." style:"height:200px"></textarea>
			</div>
			<div class="row">
			<input type="Submit" value="Send">
			</div>
			</form>
			</div>
</body>
?>