<?php
include 'connection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedValue = $_POST['selectedValue'];
    echo "Selected value: " . htmlspecialchars($selectedValue);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dropdown with Text Box Update</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    /* Dropdown Button */
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
    position: relative;
    display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {
    background-color: #f1f1f1;
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
    display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}

/* Text box styling */
#textbox {
    margin-top: 20px;
    padding: 10px;
    font-size: 16px;
    width: 300px;
}
 </style>
 <script>
    function updateTextbox(value) {
    document.getElementById('textbox').value = value;
}

    </script>
 <style>
        /* Global Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #333;
            color: #fff;
        }

        .navbar {
            background-color: #444;
            overflow: hidden;
            padding: 10px 20px;
        }

        .navbar a {
            float: right;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        .banner {
            width: 100%;
            height: 400px;
            background: url('https://images.pexels.com/photos/414171/pexels-photo-414171.jpeg?cs=srgb&dl=pexels-johannes-plenio-414171.jpg&fm=jpg') no-repeat center center/cover;
            margin-top: -10px;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin: 20px;
        }

        .box {
            width: 45%;
            height: 400px;
            background-color: #fff;
            color: #333;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            margin-bottom: 20px;
            box-sizing: border-box;
            position: relative;
            overflow: hidden;
            cursor: pointer;
        }

        .box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 10px;
        }

        .box .content {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            border-radius: 10px;
            text-align: center;
            padding: 20px;
        }

        .box h2 {
            margin: 0;
            padding: 10px;
            background: rgba(0, 0, 0, 0.7);
            border-radius: 5px;
            color: #fff;
        }

        .box p {
            color: #fff;
            font-size: 18px;
            margin-top: 10px;
        }

        @media (max-width: 768px) {
            .box {
                width: 100%;
            }
        }
    </style>
    <script>
        function updateTextbox(value) {
            document.getElementById('textbox').value = value;
        }
    </script>
</head>
<body>
<div class="navbar">
    <a href="#">Contact</a>
    <a href="#">Services</a>
    <a href="#">About</a>
    <a href="#">Home</a>
</div>
    <div class="dropdown">
        <button class="dropbtn">Dropdown</button>
        <div class="dropdown-content">
        <a href="#" onclick="updateTextbox('ENGINEERING')">ENGINEERING</a>
                    <a href="#" onclick="updateTextbox('allied_health_sciences')">allied_health_sciences</a>
                    <a href="#" onclick="updateTextbox('PARAMEDICAL_MEDICINE')">PARAMEDICAL_MEDICINE</a>
                    <a href="#" onclick="updateTextbox('MEDICNE')">MEDICNE</a>
                    <a href="#" onclick="updateTextbox('NDA')">NDA</a>
                    <a href="#" onclick="updateTextbox('DEGREE_BA')">DEGREE_BA</a>
                    <a href="#" onclick="updateTextbox('DEGREE_BSC')">DEGREE_BSC</a>
                    <a href="#" onclick="updateTextbox('DEGREE_BCOM')">DEGREE_BCOM</a>
                    <a href="#" onclick="updateTextbox('DUAL_DEGREE')">DUAL_DEGREE</a>
                    <a href="#" onclick="updateTextbox('DEGREE_LLB')">DEGREE LLB</a>
                    <a href="#" onclick="updateTextbox('DEGREE_PROF')">DEGREE_PROF</a>
                    <a href="#" onclick="updateTextbox('TEACHING')">TEACHING</a>
                    <a href="#" onclick="updateTextbox('OTHERS_DIPLOMA')">OTHERS_DIPLOMA</a>
        </div>
    </div>
    <form action="Afterinter2.php" method="post">
        <input type="text" id="textbox" name="selectedValue" placeholder="Selected value will appear here">
        <input type="submit" value="Submit">
    </form>
    <!-- <input type="text" id="textbox" placeholder="Selected value will appear here"> -->
    <script src="script.js"></script>
</body>
</html>
<?php