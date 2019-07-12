<html>

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

#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  margin-top 50%;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: white;
opacity: 0.6;
}
#customers tr:nth-child(odd){background-color: white; opacity: 0.6;}
#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: black;
  color: white;
}
</style>
<?php
error_reporting(0);
$link = mysqli_connect("localhost", "root", "", "connect"); 
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$firstname = mysqli_real_escape_string($link, $_REQUEST['firstname']);
$lastname = mysqli_real_escape_string($link, $_REQUEST['lastname']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$phone = mysqli_real_escape_string($link, $_REQUEST['phone']);
$country = mysqli_real_escape_string($link, $_REQUEST['country']);
$message = mysqli_real_escape_string($link, $_REQUEST['message']);
 
// Attempt insert query execution

$sql = "INSERT INTO connectt (firstname,lastname,email,phone,country,message) VALUES ('$firstname','$lastname','$email','$phone','$country','$message')"; //form is the name of table
if(mysqli_query($link, $sql))
{
    echo "Records added successfully.";
} else{
    echo "ERROR." . mysqli_error($link);
}

// Close connection
mysqli_close($link);

?>
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
		<h1 style="margin-top: 22px;"> Messages from other fans </h1>
		<table id="customers">
			<tr>
			<th>First Name</th> 
			<th>Last Name</th>
			<th>Country</th>
			<th>Message</th>
			</tr>
<?php
error_reporting(0);
$link = mysqli_connect("localhost", "root", "", "connect"); 
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$sql= "SELECT firstname, lastname, country, message FROM connectt";
$result= $link->query($sql);
if($result->num_rows>0)
{
	while($row=$result->fetch_assoc())
	{
		echo "<tr><td>".$row["firstname"]."</td><td>".$row["lastname"]."</td><td>".$row["country"]."</td><td>".$row["message"]."</td></tr>";
	}
	echo"</table>";
}
else{ echo "0 results";}
$conn->close();
?>
</table>
</body>
</html>