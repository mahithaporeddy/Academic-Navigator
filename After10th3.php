<?php
include 'connection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedValue = $_POST['selectedValue'];
}
$sql = "SELECT Group1 FROM polytechnic";
$result = $con->query($sql);
$group1Data = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $group1Data[] = $row["Group1"];
    }
} else {
    $group1Data[] = "0 results";
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
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

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
            background-color: #ffffff;
            min-width: 200px;
            max-height: 200px;
            overflow-y: auto;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            border-radius: 5px;
            overflow: hidden;
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
            text-align: center;
        }

        .col p {
            color: blue;
            font-size: 24px;
            margin: 10px 0;
        }
    </style>
        <script>
        function updateTextbox(value) {
            document.getElementById('textbox').value = value;
        }
    </script>
    </head>
<body>
    <div class="container">
        <div class="column left-column">
            <h2>Select Option</h2>
            <div class="dropdown">
                <button class="dropbtn">Dropdown</button>
                <div class="dropdown-content">
                    <a href="After10th2.php" onclick="updateTextbox('INTERMEDIATE')">INTERMEDIATE</a>
                    <a href="page2.php" onclick="updateTextbox('POLYTECHNIC')">POLYTECHNIC</a>
                    <a href="page3.php" onclick="updateTextbox('ITI')">ITI</a>
                    <a href="page4.php" onclick="updateTextbox('PARAMEDICAL')">PARAMEDICAL</a>
                    <a href="page5.php" onclick="updateTextbox('SHORT-TERM COURSES')">SHORT-TERM COURSES</a>
                    <a href="page6.php" onclick="updateTextbox('OTHERS')">OTHERS</a>
                </div>
            </div>
            <form action="After10th2.php" method="post">
                <input type="text" id="textbox" name="selectedValue" placeholder="Selected value will appear here">
                <input type="submit" value="Submit" class="submit-btn">
            </form>
            </div>
        <div class="column right-column">
            <h2>Data Output</h2>
            <div class="col">
                <?php
                foreach ($group1Data as $data) {
                    echo "<p>$data</p>"; 
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>