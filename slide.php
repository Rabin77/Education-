<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-content w3-section" style="max-width:500px">
 

  <img class="mySlides w3-animate-fading" src="img/s.jpg" style="width:00%">
  <img class="mySlides w3-animate-fading" src="img/bg-1.jpg" style="width:100%">
  <img class="mySlides w3-animate-fading" src="img/s.jpg" style="width:100%">
  <img class="mySlides w3-animate-fading" src="img/s.jpg" style="width:100%">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 5000);    
}
</script>

</body>
</html>
<ol class="carousel-indicators">
                    <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#mycarousel" data-slide-to="1" class="active" ></li>
                    <li data-target="#mycarousel" data-slide-to="2" class="active" ></li>
                </ol>
  