<?php
include 'connection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedValue = $_POST['selectedValue'];
}

$sql = "SELECT Group1, desc1 FROM $selectedValue";
$result = $con->query($sql);

$dataPairs = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $dataPairs[] = array(
            'Group1' => $row["Group1"],
            'desc1' => $row["desc1"]
        );
    }
} else {
    $dataPairs[] = array(
        'Group1' => "0 results",
        'desc1' => "0 results"
    );
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Two Column Layout</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        .container {
            display: flex;
            flex-direction: row;
            height: 80vh;
            width: 80vw;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
        }

        .column {
            flex: 1;
            padding: 20px;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .left-column {
            background-color: #f4f4f4;
            border-right: 1px solid #ddd;
        }

        .right-column {
            background-color: #ffffff;
        }

        h2 {
            margin: 0 0 20px;
            color: #333;
        }

        .dropbtn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            max-height: 150px; /* Set the maximum height */
            overflow-y: auto; /* Enable vertical scrollbar */
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
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

        .dropdown:hover .dropbtn {
            background-color: #3e8e41;
        }

        #textbox {
            margin-top: 20px;
            padding: 10px;
            font-size: 16px;
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
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
            margin-top: 20px;
        }

        .submit-btn:hover {
            background-color: #218838;
        }

        .col {
            width: 100%;
            max-height: 500px;
            overflow-y: auto; 
            text-align: center;
        }

        .col p {
            color: blue;
            font-size: 24px;
            margin: 10px 0;
            cursor: pointer;
        }
    </style>
    <script>
        function showDesc1Data(data) {
            document.getElementById('Group1Links').style.display = 'none';
            const desc1DataDiv = document.getElementById('desc1Data');
            desc1DataDiv.style.display = 'block';
            desc1DataDiv.innerHTML = '<p>' + data + '</p>';
        }

        function updateTextbox(value) {
            document.getElementById('textbox').value = value;
        }
    </script>
</head>
<body>
<div class="navbar">
    <a href="logout.php">Logout</a>
    <a href="#">Services</a>
    <a href="#">About</a>
    <a href="home.php">Home</a>
</div>
    <div class="container">
        <div class="column left-column">
            <h2>Select Option</h2>
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
            <form action="tryinter2.php" method="post">
                <input type="text" id="textbox" name="selectedValue" placeholder="Selected value will appear here">
                <input type="submit" value="Submit" class="submit-btn">
            </form>
        </div>
        <div class="column right-column">
            <div class="col" id="Group1Links">
                <?php
                foreach ($dataPairs as $pair) {
                    echo "<p onclick=\"showDesc1Data('{$pair['desc1']}')\">{$pair['Group1']}</p>";
                }
                ?>
            </div>
            <div class="col" id="desc1Data" style="display: none;">
                <!-- desc1 data will be displayed here -->
            </div>
        </div>
    </div>
</body>
</html>