<?phpversion
<head>
<title>FAMOUS VIDEOS</title>
<link href="stylefv.css" rel="stylesheet" type="text/css">
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
				<li><a href="connect.php">CONNECT</a></li>
                <li class="current"><a href="famvids.php">FAMOUS VIDEOS</a></li>
				<li><a href="ach.php">ACHIEVEMENTS</a></li>
				<li ><a href="skill.php">COMPARISON</a></li>
				<li><a href="stats.php">STATS</a></li>
				<li><a href="timeline.php">TIMELINE</a></li>
				<li ><a href="home.php">HOME</a></li>             
				</ul>
            </nav>  
		</div>
		</div>
</head>
<body>

<div style="text-align:center">
  <h2 style="margin-top: 50px;" ><p style="color: white">ICONIC MOMENTS</p></h2>
  <p style="margin-bottom: 20px;"><q style="color: white">Click on one of the moments below:</q></p>
</div>

<!-- Three columns -->
<div class="row">
  <div class="column" onclick="openTab('b1');" style="background:orange;">
   First ODI Century
  </div>
  <div class="column" onclick="openTab('b2');" style="background:white;">
    <p style="color: black"> First Test Century </p>
  </div>
  <div class="column" onclick="openTab('b3');" style="background:green;">
    Miracle at Hobart
  </div>
</div>

<!-- Full-width columns: (hidden by default) -->
<div id="b1" class="containerTab" style="display:none;background:orange">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2></h2>
  <p style="text-align:center;"><iframe width="800" height="345" src="https://www.youtube.com/embed/v=vARNVebWSjc?playlist=vARNVebWSjc"> 
	</iframe></p>
</div>

<div id="b2" class="containerTab" style="display:none;background:white">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2></h2>
  <p style="text-align:center;"><iframe width="800" height="345" src="https://www.youtube.com/embed/v=a6ZYvDG-_oA?playlist=a6ZYvDG-_oA&loop=1"> 
	</iframe></p>
</div>

<div id="b3" class="containerTab" style="display:none;background:green">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2></h2>
  <p style="text-align:center;"><iframe width="800" height="345" src="https://www.youtube.com/embed/v=dpkw_L6uTTo?playlist=dpkw_L6uTTo&loop=1">
	</iframe></p>
</div>

<script>
function openTab(tabName) {
  var i, x;
  x = document.getElementsByClassName("containerTab");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  document.getElementById(tabName).style.display = "block";
}
</script>

</body>