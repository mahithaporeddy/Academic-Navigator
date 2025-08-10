<!DOCTYPE html>
<html>
<head>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
<style>
/* Global styles */
html{
box-sizing:border-box
}
*,*:before,*:after{
box-sizing:inherit
}
/* Extract from normalize.css by Nicolas Gallagher and Jonathan Neal git.io/normalize */
html{
-ms-text-size-adjust:100%;
-webkit-text-size-adjust:100%
}
body{
margin:0
}
.w3-top{
	position:fixed;
	width:100%;
	z-index:1
	
	}
.w3-bar{
	width:100%;
	overflow:hidden;

	color :red;
	background-color:#fff ;

	letter-spacing:4px;

	padding:8px 16px ;
  box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);
}
.w3-bar-item{padding:8px 16px;float:left;width:auto;border:none;display:block;outline:12px;}
.w3-button{white-space:normal; }
b,strong{font-weight:bolder;}
a{
background-color:transparent
}
.w3-right{float:right }
.w3-display-container{position:relative}
.w3-content{max-width:980px
margin-left:auto;
margin-right:auto
}
.w3-image{max-width:100%;height:auto}
.w3-display-middle{position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%)}
.w3-margin-top{margin-top:16px }
.w3-center{text-align:center }
.w3-xxlarge{font-size:36px }
.w3-text-white{color:#fff }
.w3-padding{padding:8px 16px }
.w3-black{color:#fff ;background-color:#000 }
.w3-opacity-min{opacity:0.75}
.w3-hide-small{display:inline;}
.w3-text-light-grey{color:#f1f1f1 }
h1{font-size:36px}
h1,h2,h3,h4,h5,h6{font-family:"Segoe UI",Arial,sans-serif;font-weight:400;margin:10px 0}
header{
display:block
}
.w3-padding-32{padding-top:32px ;padding-bottom:32px }
.w3-border-bottom{border-bottom:1px solid #ccc }
.w3-border-light-grey{border-color:#f1f1f1 }
.w3-padding-16{padding-top:16px ;padding-bottom:16px }
.w3-col{float:left;width:100%}
.w3-col.l3{width:24.99999%}
.w3-col.m6{width:49.99999%}
.w3-margin-bottom{margin-bottom:16px }
.w3-display-topleft{position:absolute;left:0;top:0}
.w3-row-padding{padding:0 8px}
/* Responsive layout */
@media (max-width: 992px) {
  .w3-bar-item {
    padding: 8px 12px;
  }
  .w3-project-item {
    width: 50%; /* Adjust for smaller screens */
  }
}
</style>
</head>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar">
    <a href="#home" class="w3-bar-item w3-button"><b>ACADEMIC</b> NAVIGATOR</a>
    <div class="w3-right w3-hide-small">
      <a href="#home" class="w3-bar-item w3-button">Home</a>
      <a href="#projects" class="w3-bar-item w3-button">Projects</a>
      <a href="#about" class="w3-bar-item w3-button">About</a>
      <a href="#contact" class="w3-bar-item w3-button">Contact</a>
      <a href="#" class="w3-bar-item w3-button">Log-out</a>
    </div>
  </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content" id="home">
  <img class="w3-image" src="https://cdn.pixabay.com/photo/2015/07/19/10/00/school-work-851328_640.jpg" alt="Academic Navigator" style="width:100%">
  <div class="w3-display-middle w3-margin-top w3-center">
    <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>ACADEMIC</b></span> <span class="w3-hide-small w3-text-light-grey">NAVIGATOR</span></h1>
  </div>
</header>

<!-- Page content -->
<div class="w3-content w3-padding">

  <!-- Project Section -->
  <div class="w3-container w3-padding-32 w3-project-container" id="projects">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Projects</h3>
    <div class="w3-row-padding">
      <div class="w3-col l3 m6 s12 w3-project-item">
        <div class="w3-display-container">
          <div class="w3-display-topleft w3-black w3-padding">IF YOU ARE PURSUING 10TH THEN CLICK HERE TO KNOW MORE ABOUT FURTHER</div>
          <img src="https://watermark.lovepik.com/photo/50142/8042.jpg_wh1200.jpg" alt="After 10th">
        </div>
      </div>
      <div class="w3-col l3 m6 s12 w3-project-item">
        <div class="w3-display-container">
          <div class="w3-display-topleft w3-black w3-padding">After Intermediate</div>
          <img src="/w3images/house2.jpg" alt="House">
        </div>
      </div>
      <div class="w3-col l3 m6 s12 w3-project-item">
        <div class="w3-display-container">
          <div class="w3-display-topleft w3-black w3-padding">Renovated</div>
          <img src="/w3images/house3.jpg" alt="House">
        </div>
      </div>
      <div class="w3-col l3 m6 s12 w3-project-item">
        <div class="w3-display-container">
          <div class="w3-display-topleft w3-black w3-padding">Barn House</div>
          <img src="/w3images/house4.jpg" alt="House">
        </div>
      </div>
    </div>
  </div>

  <!-- About Section -->
  <div class="w3-container w3-padding-32" id="about">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">About</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
  </div>

  <div class="w3-row-padding w3-grayscale">
    <!-- Team members content here -->
  </div>

  <!-- Contact Section -->
  <div class="w3-container w3-padding-32" id="contact">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Contact</h3>
    <p>Lets get in touch and talk about your next project.</p>
    <form action="/action_page.php" target="_blank">
      <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Email" required name="Email">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Subject" required name="Subject">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Comment" required name="Comment">
      <button class="w3-button w3-black w3-section" type="submit">
        <i class="fa fa-paper-plane"></i> SEND MESSAGE
      </button>
    </form>
  </div>

  <!-- Image of location/map -->
  <div class="w3-container">
    <img src="/w3images/map.jpg" class="w3-image" style="width:100%">
  </div>

</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-16">
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
</footer>

</body>
</html>
