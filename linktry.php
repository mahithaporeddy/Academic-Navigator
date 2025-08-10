<?php
include 'connection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedValue = $_POST['selectedValue'];
}

$sql = "SELECT col1, col2 FROM $selectedValue";
$result = $con->query($sql);
$dataPairs = []; 

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $dataPairs[] = array(
            'col1' => $row["col1"],
            'col2' => $row["col2"]
        );
    }
} else {
    $dataPairs[] = array(
        'col1' => "0 results",
        'col2' => "0 results"
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

        .col {
            width: 100%;
            max-height: 500px;
            overflow-y: auto; 
            text-align: center;
        }

        .col a {
            color: blue;
            font-size: 24px;
            margin: 10px 0;
            display: block;
            cursor: pointer;
            text-decoration: none;
        }

        .col p {
            color: blue;
            font-size: 24px;
            margin: 10px 0;
        }
    </style>
    <script>
        function showCol2Data(data) {
            document.getElementById('col1Links').style.display = 'none';
            const col2DataDiv = document.getElementById('col2Data');
            col2DataDiv.style.display = 'block';
            col2DataDiv.innerHTML = '<p>' + data + '</p>';
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
                    <a href="#" onclick="updateTextbox('practice')">practice</a>
                </div>
            </div>
            <form action="linktry.php" method="post">
                <input type="text" id="textbox" name="selectedValue" placeholder="Selected value will appear here">
                <input type="submit" value="Submit" class="submit-btn">
            </form>
        </div>
        <div class="column right-column">
            <div class="col" id="col1Links">
                <?php
                foreach ($dataPairs as $pair) {
                    echo "<a href='#' onclick=\"showCol2Data('{$pair['col2']}')\">{$pair['col1']}</a>";
                }
                ?>
            </div>
            <div class="col" id="col2Data" style="display: none;">
                <!-- col2 data will be displayed here -->
            </div>
        </div>
    </div>
</body>
</html>
