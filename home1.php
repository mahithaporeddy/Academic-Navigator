<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Example</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    /* styles.css */
html{
    
box-sizing:border-box;

border-radius:15px;
background:white;

}
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color:white;
    border-radius:15px;
    overflow-y:auto;
    /* filter: blur(2px); */
 
}
.fixed-login-container {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: gray ; /* Semi-transparent black background */
            padding: 20px;
           opacity:0.9;
            border-radius: 10px;
            text-align: center;
            z-index: 1000;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5); /* Drop shadow */
            color:black; /* Text color */
            width: 60%; /* Adjust width as needed */
        }
        .fixed-login-container h2 {
            margin-top: 0;
            font-size: 24px;
        }
        .fixed-login-container a{
            text-decoration: none;   
        }
        .fixed-login-container p {
            font-size: 18px;
            line-height: 1.6;
            margin-bottom: 20px;
        }
        .fixed-login-button {
            padding: 10px 20px;
            background-color: green;
            color: white;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            opacity:1.5;
         
            font-size: 20px;
            text-align: center;
            display: inline-block;
            transition: background-color 0.3s;
        }
        .fixed-login-button:hover {
            background-color: #575757;
        }
        .blur {
            filter: blur(5px); /* Blur the background */
        }

.navbar1 {
    opacity:1.5;
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: white;
    position:fixed;
    z-index:1;
    padding: 10px 20px 10px 16px;
    width:100%;
    box-shadow:0 2px 5px 0 black,0 2px 10px 0 white;
   
}

.navbar-left {
    flex: 1;
}

.navbar-right {
    display: flex;
    gap: 20px;
}

.navbar-item {
    color: black;
    text-decoration: none;
    padding: 15px 17px;
    letter-spacing:4px;
    transition: background-color 0.3s;
    font-size:20px;
    
}

.navbar-item:hover {
    background-color: #575757;
    border-radius:20px;
}
b,strong{font-weight:bolder;}
a{
background-color:transparent;
text-decoration:none;
}
m{
    font-weight:bolder;
    font-size:25px;
}
p{
    font-size:20px;
    line-height:30px;
    font-family:arial;
    letter-spacing:2px;
    margin-left:20px;
   
}
.container{position:relative;
object-fit:cover;
max-width: cover;
height:500px;
border:2px solid none;
margin-right:15px;
border-radius:20px;
box-shadow:0 2px 5px 0 black,0 2px 10px 0 white;
text-align:center;

}
.container p{
  text-decoration:none;
font-size:18px;
}
.container1{position:relative;


}
.content{width:cover;
margin-left:auto;
margin-right:auto;
padding:8px 16px;
 }
 .content b{
  font-size:20px;

 }
.w3-image{max-width:100%;
  
   
object-fit:fill;

margin-top:70px;}
.middle{position:absolute;top:48%;left:66%;transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);
   margin-top:12px;
text-align:center;}
.middle p{
    font-size:20px;
    background:white;
    font-family:arial;
    letter-spacing:4px;
    margin-left:90px;
    margin-right:90px;
}
.font{
font-size:36px;
color:red;
letter-spacing:4px;  }
.padding{
    padding:8px 16px;
    color:white ;background-color:#000;
   
    opacity:0.75;
}
.border-bottom{border-bottom:1px solid #ccc;
border-color:#f1f1f1;
padding-top:60px ;padding-bottom:16px; }
.row-padding{padding:15px 15px;
}

.col{float:left;width:100%}


.col.m6{width:24%;}
.margin-bottom{margin-bottom:50px;margin-right:15px; }



.small{display:inline;
color:white; 
font-size:36px;}
.opacity{
    filter:blur(1px);}


</style>
<!-- <script>   function blurBackground() {
            document.querySelector('.content-to-blur').classList.add('blur');
        }</script> -->
<body>
<div class="blur">
        <div class="navbar1">
        <div class="navbar-left">
            <a href="#" class="navbar-item"><b>Academic</b> Navigator</a>
        </div>
        <div class="navbar-right">
            <a href="#home" class="navbar-item">Home</a>
            <a href="#Careers" class="navbar-item">Careers</a>
            <a href="#About" class="navbar-item">About</a>
            <a href="#Contact" class="navbar-item">Contact</a>
            <a href="#" class="navbar-item">Log-out</a>
        </div></div>
  
    <div class="container1" id="home">
    <img class="w3-image" src="Webphoto.jpg" alt="Academic Navigator" style="width:100%">
    <div class="middle">
    <h1 class="font"><span class="padding"><b>ACADEMIC</b></span> <span class="small">NAVIGATOR</span></h1><p> Discover Your Path to Success</p>
  </div>
</div>
<p><m>Welcome to Academic Navigator</m></p>
<p>Choosing the right career path can be a tough task, but Academic Navigator is here to make that journey easier for you. Our mission is to empower students with the knowledge and resources they need to make informed decisions about their future careers.
</p>
<p><m>How Academic Navigator Can Help You</m></p>
<p><b>Comprehensive Career Information:</b></p>
<p>Explore detailed information about various career paths, including job descriptions, required skills, educational requirements, and potential career growth. Whether you're interested in science, arts, technology, or business, we have resources to guide you.
</p>
<p><b>Personalized Guidance:</b></p>
<p>Register with us to receive personalized advice and support from our team of experts. We offer one-on-one counseling sessions to help you identify your strengths and interests, align them with potential career options, and create a roadmap for achieving your goals.
</p>
<p><b>Educational Resources:</b></p>
<p>Access a wealth of educational resources, including articles, videos, and tutorials, to help you excel in your studies and prepare for entrance exams and college applications.
</p>
<p><b>Interactive Tools: </b></p>
<p>Utilize our interactive tools, such as career assessment tests and college matching services, to narrow down your options and find the best fit for your aspirations.
</p>
<p><b>Inspiring Stories:</b></p>
<p>Read inspiring stories from successful professionals who have navigated their career paths. Learn from their experiences and gain insights into different industries and professions.
</p>
<div class="content" id="Careers">
    <h2 class="border-bottom">Explore Career Paths</h2>
    <p>Click on the images below to learn more about various career paths. Each section provides in-depth information to help you understand what it takes to succeed in that field and what opportunities await you.
    </p>
    <div class="row-padding">
     
    <div class="col m6 margin-bottom">
        <div class="container">
        <a href="after10th2.php">
          
          <img src="https://watermark.lovepik.com/photo/50142/8042.jpg_wh1200.jpg " alt="After 10th" style="width:100% ;border-radius:20px 20px 0 0 ">
         <p><b> Middle School</b></p><p>Discover the subjects you'll study, extracurricular activities, and early career exploration resources to help you build a strong academic foundation.</p>
         </div></a> 
    </div>
    <div class="col m6 margin-bottom">
        <div class="container">
        <a href="afterinter2.php">
          <img src="https://watermark.lovepik.com/photo/50142/8042.jpg_wh1200.jpg " alt="After 10th" style="width:100%;border-radius:20px 20px 0 0">
          <p><b> High School</b></p><p>Access resources for course selection, college preparation, and career planning. Find tips on internships, extracurriculars, and navigating the college application process.
          </p>
          </div></a> 
    </div>
    <div class="col m6 margin-bottom">
        <div class="container">
        <a href="eligible.php">
          <img src="https://watermark.lovepik.com/photo/50142/8042.jpg_wh1200.jpg " alt="After 10th" style="width:100%;border-radius:20px 20px 0 0">
          <p><b> Entrance Tests</b></p><p>Get comprehensive guides on various entrance exams, including eligibility and  information to help you prepare and succeed.
          </p>
          </div></a> 
    </div>
     <div class="col m6 margin-bottom">
        <div class="container">
          
          <img src="https://watermark.lovepik.com/photo/50142/8042.jpg_wh1200.jpg " alt="After 10th" style="width:100%;border-radius:20px 20px 0 0">
          <p><b> List of Universities</b></p><p>Explore detailed profiles of universities, including admission requirements, programs, and campus life. Learn about financial aid and read success stories from alumni.
          </p>
         </div></a> 
    </div>
</div>
<!--  --><!--  --><!--  -->
<!-- About Section -->
<div class="content" id="About">
<h2 class="border-bottom">About Us</h2>
    <p> Academic Navigator, a project designed by a group of passionate individuals pursuing engineering in IT. We are dedicated to helping students navigate the complexities of choosing their educational and career paths.
    </p><br>
   <p> <b>Our Mission</b></p><p>At Academic Navigator, we believe that every student deserves access to comprehensive guidance and resources to make informed decisions about their future. Our goal is to simplify this process by providing clear, accessible information and personalized support.
</p>
<p><b>Why We Built This Website</b></p>
<p>As students ourselves, we understand the challenges of planning for the future. We created Academic Navigator to empower fellow students with the tools and knowledge they need to chart their academic journey confidently. Whether you're exploring options in middle school, navigating high school decisions, preparing for entrance tests, or choosing a university, our platform is here to support you every step of the way.
</p>
  </div>

  <div class="row-padding">
  <div class="col m6 margin-bottom">
        <div class="container">
            
          <img src="https://watermark.lovepik.com/photo/50142/8042.jpg_wh1200.jpg " alt="After 10th" style="width:100%;border-radius:20px 20px 0 0"><h1>hello</h1><br><p>hello</p>
        </div>
    </div>
    <div class="col m6 margin-bottom">
        <div class="container">
          
          <img src="https://watermark.lovepik.com/photo/50142/8042.jpg_wh1200.jpg " alt="After 10th" style="width:100%;border-radius:20px 20px 0 0"><h1>hello</h1><br><p>hello></p>
        </div>
    </div>
    <div class="col m6 margin-bottom">
        <div class="container">
            
          <img src="https://watermark.lovepik.com/photo/50142/8042.jpg_wh1200.jpg " alt="After 10th" style="width:100%;border-radius:20px 20px 0 0"><h1>hello</h1><br><p>hello></p>
        </div>
    </div>
    <div class="col m6 margin-bottom">
        <div class="container">
            
          <img src="https://watermark.lovepik.com/photo/50142/8042.jpg_wh1200.jpg " alt="After 10th" style="width:100%;border-radius:20px 20px 0 0"><h1>hello</h1><br><p>hello></p>
        </div>
    </div>
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




</body>
<?php include 'footer.php';?></div>  <div class="fixed-login-container">
            <h2>Welcome to Academic Navigator</h2>
            <p>Do you want to explore various career options and educational paths? Login to get personalized guidance!</p>
            <button class="fixed-login-button" id="loginBtn"><a href="index.php">Login</a></button>
        </div>

</html>
