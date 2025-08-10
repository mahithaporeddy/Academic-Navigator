<?php
include 'connection.php';

$selectedValue = isset($_POST['selectedValue']) ? $_POST['selectedValue'] : '';

$dataPairs = []; // Initialize $dataPairs

if (!empty($selectedValue)) {
    // Escape selected value to prevent SQL injection
    $selectedValue = $con->real_escape_string($selectedValue);
    
    $sql = "SELECT Group1, desc1, image_url FROM $selectedValue";
    $result = $con->query($sql);

    if ($result) {
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $dataPairs[] = array(
                    'Group1' => $row["Group1"],
                    'desc1' => $row["desc1"],
                    'image_url' => $row["image_url"]
                );
            }
        } else {
            $dataPairs[] = array(
                'Group1' => "No results found for '$selectedValue'",
                'desc1' => "Please select an option above to see details.",
                'image_url' => ""
            );
        }
    } else {
        $dataPairs[] = array(
            'Group1' => "Error executing SQL: " . $con->error,
            'desc1' => "",
            'image_url' => ""
        );
    }
} else {
    $dataPairs[] = array(
        'Group1' => "Select an Option from dropdown",
        'desc1' => "Please select an option above to see details.",
        'image_url' => ""
    );
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academic Navigator</title>
    <link rel="stylesheet" href="styles.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

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
    }
    .image{
        background-image: url("https://blog.cambridgeinternational.org/wp-content/uploads/Featured-Image-10.png");
        width: 800px; /* Full width */
        margin:auto;
        margin-top:100px;
        height: 400px; /* Adjust height as needed */
        background-size: cover; /* Cover the entire area */
        background-position: center; /* Center the image */
        margin-bottom: 20px; /* Add some space below */
    }
    .content{
        width:100%;
        height:auto;
        padding:15px,13px;
        background-color:white;
        color:black;
        margin:5px;
        border-radius:10px;
        box-shadow:0 2px 5px 0 black,0 2px 10px 0 white;
        font-family:arial;
        letter-spacing:3px;
        font-weight:2px;
        font-size:30px;
    }
    .content p{
    font-size:20px;
    line-height:30px;
    font-family:arial;
    margin-left:20px;
    
}

.container p {
        font-size:20px;
    line-height:30px;
    font-family:arial;
    margin-left:20px;
    margin-top:50px;
      }

        .container {
            display: flex;
            max-width: 1600px;
            margin: 100px auto;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            height:570px;
            /* padding-top:150px; */
        }

        .column {
            flex: 1;
            padding: 20px;
            box-sizing: border-box;
        }

        .left-column {
            background-color: #f4f4f4;
            border-right: 1px solid #ddd;
            display: flex;
            flex-direction: column;
            align-items: center;
            /* padding-top:150px; */
            padding: 20px;
            min-width: 250px; /* Set a minimum width for consistency */
        }
        /* .left-column p{
            font-size:20px;
    line-height:30px;
    font-family:arial;
    margin-left:20px;
        } */
        .right-column {
            background-color: #ffffff;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            flex: 1; /* Allow the column to grow */
            height:570px;
        }
        .right-column b{
            font-size:20px;
            letter-spacing:4px;
            

        }

        h2 {
            margin: 0 0 20px;
            color: #333;
            text-align: center;
        }

        .search-box {
            width: 100%;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            font-size: 16px;
            margin-bottom: 20px;
        }

        input[type="submit"] {
            background-color: #6dd287;
            color: white;
            border: none;
            padding: 12px 20px;
            display: inline-block;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            width: 100%;
            max-width: 200px;
            text-align: center;
        }

        input[type="submit"]:hover {
            background-color: var(--secondary-color);
        }
        .clr{
            background: #6dd287;
            color:black;
            max-width:280px;
            min-width:190px;
            border-radius:5px;
            padding:20px;
            margin:auto;
            display: flex;
            flex-wrap: wrap;
        }
        .clr:hover{
            background:var(--secondary-color);
            color:white;
        }

        .col {
            width: 100%;
            text-align: center;
            overflow-y: auto;
            /* max-height: 500px; */
            padding: 10px;
            margin-top: 10px;
            min-height: 100px; /* Set a minimum height for consistency */
            height:570px; /* Limit maximum height to avoid excessive scrolling */
            overflow: auto; /* Enable scrolling if needed */
        }

        .col p {
            color: var(--primary-color);
            font-size: 18px;
            margin: 10px 0;
            cursor: pointer;
            transition: background-color 0.3s ease;
            padding: 8px;
            border-radius: 5px;
        }

        /* .col p:hover {
            background-color: #f0f0f0;
        } */

        .details-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: -15px;
            height: 570px;
        }
        .details-container p{
            font-size:20px;

    font-family:arial;
   
        }

        .card {
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 200px;
            height:570px;
            text-align: center;
        }

        .card img {
            max-width: 100%;
            border-radius: 8px;
        }
        .output-box {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            /* padding: 20px;
            margin-bottom: 20px; */
            overflow-y:auto ;
            height:570px;
        }

        .output-box img {
           width: 100%;
            border-radius: 5px;
            margin-bottom: 10px;
            object-fit:cover;
        }

        .output-box h3 {
            color: #333;
            font-size: 24px;
            margin-bottom: 10px;
            text-align: center;
        }

        .output-box p {
            text-align: justify;
            line-height: 1.6;
            margin-bottom: 10px;
        }

        .output-box button {
            background-color: #008CBA;
            color: white;
            border: none;
            padding: 8px 16px;
            margin-top: 10px;
            align:left;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            
            margin: 0 auto;
        }

        .output-box button:hover {
            background-color: #005F6B;
        }
    </style>
    <script>
        function showDetails(data) {
            document.getElementById('Group1Links').style.display = 'none';
            const detailsContainer = document.getElementById('detailsContainer');
            detailsContainer.style.display = 'flex';
            detailsContainer.innerHTML = '';
            data.forEach(item => {
                const card = document.createElement('div');
                card.className = 'output-box';
                card.innerHTML = ` <button onclick="goBack()"><i class='bx bx-arrow-back'></i></button>
                
                    <h3>${item.Group1}</h3>
                    <p>${item.desc1}</p>
                    <img src="${item.image_url}" alt="${item.Group1}">
                   
                `;
                detailsContainer.appendChild(card);
            });
        }
        function confirmLogout(event) {
            event.preventDefault(); // Prevent the default form submission
            var confirmed = confirm("Are you sure you want to logout?");
            if (confirmed) {
                window.location.href = 'logout.php';
            }
        }
        function goBack() {
            document.getElementById('detailsContainer').style.display = 'none';
            document.getElementById('Group1Links').style.display = 'block';
        }
       
    
    </script>
</head>
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
            <div class="image">
        </div>
        <div class="content">
            <p>After completing intermediate education, students face a pivotal moment in their academic and career journey. This phase marks a transition towards specialized learning and career preparation, guided by individual interests, strengths, and aspirationsUpon completing intermediate studies, students can pursue diverse paths tailored to their career goals and passions. Those inclined towards scientific exploration may delve into fields such as engineering, medicine, or technology, where they can apply their knowledge to innovate and solve real-world challengesFor those with a strategic mindset and an interest in commerce, subjects like economics, finance, and business management offer pathways to careers in banking, entrepreneurship, or corporate leadership.Students with a penchant for creativity and a love for the humanities can explore literature, history, or social sciences. These disciplines pave the way for careers in journalism, law, education, or the arts, allowing individuals to shape narratives, advocate for change, or inspire through artistic expression.</p>
    </div>

    <div class="container" id="container">
        <div class="column left-column">
            <p>Whether you're aiming for professional degrees, skill-based programs, or exploring new interests, there are a plethora of options available. Use the dropdown menu below to explore various courses and find the one that aligns with your aspirations and goals. Each course listing provides detailed information to help you make an informed decision.

<br>Select a Course:</p>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <select id="dropdownOptions" class="search-box" name="selectedValue">
                    <option value="">Select an option below...</option>
                    <option value="ENGINEERING">ENGINEERING</option>
                    <option value="allied_health_sciences">allied_health_sciences</option>
                    <option value="PARAMEDICAL_MEDICINE">PARAMEDICAL_MEDICINE</option>
                    <option value="MEDICNE">MEDICNE</option>
                    <option value="NDA">NDA</option>
                    <option value="DEGREE_BA">DEGREE_BA</option>
                    <option value="DEGREE_BSC">DEGREE_BSC</option>
                    <option value="DEGREE_BCOM">DEGREE_BCOM</option>
                    <option value="DUAL_DEGREE">DUAL_DEGREE</option>
                    <option value="DEGREE LLB">DEGREE LLB</option>
                    <option value="DEGREE_PROF">DEGREE_PROF</option>
                    <option value="TEACHING">TEACHING</option>
                    <option value="OTHERS_DIPLOMA">OTHERS_DIPLOMA</option>
                </select>
                <input type="submit"value="Submit" class="submit-btn">
            </form>
        </div>
        <div class="column right-column">
            <div class="col" id="Group1Links"> <b>COURSES AVAILABLE IN <?php echo $selectedValue ;?></b><br>
               <?php foreach ($dataPairs as $pair): ?>
                   
                    <p onclick="showDetails([{
                        'Group1': '<?php echo $pair['Group1']; ?>',
                        'desc1': '<?php echo $pair['desc1']; ?>',
                        'image_url': '<?php echo $pair['image_url']; ?>'
                    }])"> <span class="clr"><?php echo $pair['Group1'] ; ?></span></p>
                <?php endforeach; ?>
            </div>
            <div class="details-container" id="detailsContainer" style="display: none;">
                <!-- Details will be displayed dynamically here -->
            </div>
        </div>
    </div>
 
</body>
<?php include 'footer.php';?>
</html>
