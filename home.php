<?phpversion
<head>
<title>Virat Kohli</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<header>
<div class="menubar" style="top: 0px;">
    <div class="left">
            <nav class="clearfix1" style="margin-left: 230;">
              
                <ul class="main-nav">
				<li><a href="connect.php">CONNECT</a></li>
                <li><a href="famvids.php">FAMOUS VIDEOS</a></li>
				<li><a href="ach.php">ACHIEVEMENTS</a></li>
				<li><a href="skill.php">COMPARISON</a></li>
				<li><a href="stats.php">STATS</a></li>
				<li><a href="timeline.php">TIMELINE</a></li>
				<li class="current"><a href="home.php">HOME</a></li>             
				</ul>
            </nav>  
    </div>
	 </div>
	
<div class="slideshow-container">

<div class="mySlides">
  <q>I love watching Virat Kohli bat. I love his aggrission And serious passion that I used to have. He remainds me of myself.</q>
  <p class="author">- Viv Richards</p>
</div>

<div class="mySlides">
  <q>To became a good player, you need talent. To became a great player you need an attitude like Kohli.</q>
  <p class="author">- Sunil Gavaskar</p>
</div>

<div class="mySlides">
  <q>Virat Kohli is the Prince of Indian Cricket - Lan Chappell</q>
  <p class="author">- Lan Chappell</p>
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>

<div class="dot-container">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>	
</header>
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
</body>

