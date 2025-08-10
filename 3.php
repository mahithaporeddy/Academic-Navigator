<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
</head>
<style>
	
        /* Global Styles */
        :root {
            --primary-color: #4CAF50;
            --secondary-color: #388E3C;
            --text-color: #333;
            --background-color: #f4f4f9;
            --navbar-height: 60px;
            --banner-height: 400px;
            --box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            --transition-speed: 0.3s;
            --border-radius: 8px;
            --font-family: 'Roboto', sans-serif;
        }

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
        top: 0;
		margin-bottom:150px;
       
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
	.content{
        width:100%;
        height:auto;
        padding:15px,13px;
        background-color:white;
        color:black;
        margin:5px;
       
        /* box-shadow:0 2px 5px 0 black,0 2px 10px 0 white; */
        font-family:arial;
        letter-spacing:3px;
        font-weight:2px;
        font-size:30px;
		margin-top:100px;
    }
    .content p{
    font-size:20px;
    line-height:30px;
    font-family:arial;
    margin-left:20px;
    
}
</style>
<script>
		  function confirmLogout(event) {
            event.preventDefault(); // Prevent the default form submission
            var confirmed = confirm("Are you sure you want to logout?");
            if (confirmed) {
                window.location.href = 'logout.php';
            }
        }
		</script>
<body>
<div class="navbar1">
        <div class="navbar-left">
            <a href="#" class="navbar-item"><b>Academic</b> Navigator</a>
        </div>
        <div class="navbar-right">
            <a href="nav.php#home" class="navbar-item">Home</a>
            <a href="nav.php#Careers" class="navbar-item">Careers</a>
            <a href="nav.php#About" class="navbar-item">About</a>
            <a href="nav.php#Feedback" class="navbar-item">Feedback</a>
            <a href="logout.php"onclick="confirmLogout(event)"class="navbar-item">Logout</a>
            </div></div>
			<div class="content">
            <p>Telangana has world class educational institutions that provide quality education in a variety of disciplines and has opportunities in different sectors that one can enter after their education. Students after receiving quality education, are equipped with all the skills required to get into any field of their choice. Telangana has seen an exponential increase in the number of students from the state receiving admissions in numerous reputed institutions across the globe and various other international opportunities is indicative of the quality of education in Telangana.
<br><br>Telangana is home to 28 universities out of which 3 are central universities and 17 are state universities. Numerous reputed institutions like IIT, IIIT Hyderabad, NALSAR, NIPER,IIIT Basara, NIT Warangal, AIIMS Bibinagar etc., are situated in Telangana. Apart from these the state has over 2,900 junior colleges and over 41,360 schools (out of which over 26,000 are public schools), above 1000 degree colleges, more than 1300 professional colleges (as in 2022-23) and many more coaching and training institutions.<br><br>Here are some list of top universities</p>
    </div>
    <div class="container mt-30 mb-30 pt-0 pb-30"style="margin-top:100px;margin-bottom:1px;>
        <div class="row">
          <div class="col-md-9">
            <div class="single-service">
				<div class="table-responsive">
<table class="table table-bordered">
	<tbody>
		<tr>
			<th>S.No.</th>
			<th>Name of the Engineering colleges</th>
		</tr>
		<tr>
			<td>31</td>
			<td><a href="https://www.gniindia.org/" target="_blank">Guru Nanak Institute of Engineering and Technology, Ibrahimpatnam</a></td>
		</tr>
		<tr>
			<td>32</td>
			<td><a href="https://www.shiksha.com/college/harshith-group-of-institutions-ranga-reddy-36677" target="_blank">Harshith Group of Institutions, Ranga Reddy</a></td>
		</tr>
		<tr>
			<td>33</td>
			<td><a href="https://collegedunia.com/college/17798-hyderabad-institute-of-technology-and-management-hitam-hyderabad" target="_blank">Hyderabad Institute of Technology and Management, Hyderabad</a></td>
		</tr>
		<tr>
			<td>34</td>
			<td><a href="https://www.iiit.ac.in/" target="_blank">International Institute of Information Technology, Hyderabad</a></td>
		</tr>
		<tr>
			<td>35</td>
			<td><a href="https://exams.jbiet.edu.in/"target="_blank">JB Institute of Engineering and Technology, Hyderabad</td>
		</tr>
		<tr>
			<td>36</td>
			<td><a href="https://www.kmit.in/" target="_blank">Keshav Memorial Engineering College, Hyderabad</a></td>
		</tr>
		<tr>
			<td>37</td>
			<td><a href="http://kitskodad.in/" target="_blank">Kodada Institute of Technology and Science for Women, Nalgonda</a></td>
		</tr>
		<tr>
			<td>38</td>
			<td><a href="https://www.kpritech.ac.in/" target="_blank">Kommuri Pratap Reddy Institute of Management, Hyderabad</a></td>
		</tr>
		<tr>
			<td>39</td>
			<td><a href="https://www.lords.ac.in/" target="_blank">Lords Institute of Engineering and Technology, Hyderabad</a></td>
		</tr>
		<tr>
			<td>40</td>
			<td><a href="https://www.mist.ac.in/" target="_blank">Mahaveer Institute of Science and Technology (MIST) Hyderabad</a></td>
		</tr>
		<tr>
			<td>41</td>
			<td><a href="https://www.mrec.ac.in/" target="_blank">Malla Reddy College of Engineering and Technology, Hyderabad</a></td>
		</tr>
		<tr>
			<td>42</td>
			<td><a href="https://www.mlritm.ac.in/" target="_blank"> Marri Laxman Reddy Institute of Technology and Management Hyderabad</a></td>
		</tr>
		<tr>
			<td>43</td>
			<td><a href="https://matrusri.edu.in/" target="_blank">Matrusri Engineering College, Hyderabad</a></td>
		</tr>
		<tr>
			<td>44</td>
			<td><a href="https://mvsrec.edu.in/" target="_blank">Maturi Venkata Subba Rao Engineering College, Hyderabad </a></td>
		</tr>
		<tr>
			<td>45</td>
			<td><a href="https://minaenggcollege.ac.in/" target="_blank">Mina Institute of Engineering and Technology for Women, Miryalguda</a></td>
		</tr>
	</tbody>
</table>
</div>
            </div>
          </div>
		  
          
       </div>
       <div class="page-btn">
        <span><a href="b.php">1</a></span>
        <span><a href="2.php">2</a></span>
        <span><a href="3.php">3</a></span>
        <span><a href="4.php">4</a></span>
        
       </div>
   </div>
</body><?php include 'footer.php';?>
</html>