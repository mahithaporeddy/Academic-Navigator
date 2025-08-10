<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academic Navigator</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Reset and global styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        .navbar {
            background-color: #333;
            color: #fff;
            display: flex;
            justify-content: flex-end;
            padding: 10px 20px;
            position: fixed;
            width: 100%;
            z-index: 1000;
        }

        .navbar a {
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            transition: background-color 0.3s ease;
        }

        .navbar a:hover {
            background-color: #555;
        }

        .banner {
            width: 100%;
            height: 300px;
            background: url('https://images.pexels.com/photos/414171/pexels-photo-414171.jpeg?cs=srgb&dl=pexels-johannes-plenio-414171.jpg&fm=jpg') no-repeat center center/cover;
            margin-top: -60px;
            position: relative;
        }

        .banner h1 {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: #fff;
            font-size: 3em;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .container-main {
            display: flex;
            justify-content: space-around;
            align-items: flex-start;
            margin-top: 100px;
        }

        .column {
            flex: 1;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
            margin: 0 10px;
        }

        .column h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .dropdown {
            position: relative;
            display: inline-block;
            margin-bottom: 20px;
        }

        .dropbtn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            display: block;
            width: 100%;
            text-align: center;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #fff;
            min-width: 200px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            border-radius: 5px;
            overflow: hidden;
            overflow-y: auto;
            max-height: 200px;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            transition: background-color 0.3s ease;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .textbox-container {
            margin-bottom: 20px;
        }

        #textbox {
            width: calc(100% - 42px);
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            float: left;
        }

        .submit-btn {
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            float: right;
        }

        .submit-btn:hover {
            background-color: #218838;
        }

        .col {
            max-height: 300px;
            overflow-y: auto;
            margin-top: 20px;
        }

        .col p {
            margin: 10px 0;
            padding: 10px;
            background-color: #f1f1f1;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .col p:hover {
            background-color: #e0e0e0;
        }

        .desc1-data {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
            display: none;
        }

        .desc1-data p {
            margin: 0;
            font-size: 16px;
            line-height: 1.6;
        }

        @media (max-width: 768px) {
            .container-main {
                flex-direction: column;
                align-items: center;
            }

            .column {
                width: 100%;
                margin-bottom: 20px;
            }

            .banner {
                height: 200px;
            }

            .banner h1 {
                font-size: 2em;
            }
        }
    </style>
</head>
<body>
<div class="navbar">
    <a href="#">Contact</a>
    <a href="#">Services</a>
    <a href="#">About</a>
    <a href="home.php">Home</a>
</div>

<div class="banner">
    <h1>Welcome to Academic Navigator</h1>
</div>

<div class="container-main">
    <div class="column">
        <h2>Select Option</h2>
        <div class="dropdown">
            <button class="dropbtn">Select Category</button>
            <div class="dropdown-content">
                <a href="#" onclick="updateTextbox('intermediate')">Intermediate</a>
                <a href="#" onclick="updateTextbox('polytechnic')">Polytechnic</a>
                <a href="#" onclick="updateTextbox('iti')">ITI</a>
                <a href="#" onclick="updateTextbox('paramedical')">Paramedical</a>
                <a href="#" onclick="updateTextbox('short_term_courses')">Short-term Courses</a>
                <a href="#" onclick="updateTextbox('others')">Others</a>
            </div>
        </div>

        <div class="textbox-container">
            <input type="text" id="textbox" name="selectedValue" placeholder="Selected value will appear here">
            <input type="submit" value="Submit" class="submit-btn">
        </div>
    </div>

    <div class="column">
        <div class="col">
            <?php
            foreach ($dataPairs as $pair) {
                echo "<p onclick=\"showDesc1Data('{$pair['desc1']}')\">{$pair['Group1']}</p>";
            }
            ?>
        </div>
        <div class="desc1-data" id="desc1Data">
            <!-- Description data will be displayed here -->
        </div>
    </div>
</div>

<script>
    function showDesc1Data(data) {
        const desc1DataDiv = document.getElementById('desc1Data');
        desc1DataDiv.style.display = 'block';
        desc1DataDiv.innerHTML = '<p>' + data + '</p>';
    }

    function updateTextbox(value) {
        document.getElementById('textbox').value = value;
    }
</script>

</body>
</html>
