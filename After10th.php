<?php
include 'connection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedValue = $_POST['selectedValue'];
}
$sql = "SELECT Group1, desc1 FROM $selectedValue ";
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
        'Group1' => "No results found for '$selectedValue'",
        'desc1' => "Please select another option.");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Data Display</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Global Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
            color: #333;
        }

        .navbar {
            background-color: #333;
            overflow: hidden;
            padding: 10px 20px;
            text-align: right;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .navbar a {
            display: inline-block;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #555;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            padding: 20px;
            display: flex;
            flex-direction: column;
            gap: 20px; /* Gap between sections */
        }

        .selection-area {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px; /* Gap between elements */
        }

        .selection-area h2 {
            margin: 0;
            color: #333;
        }

        .search-box {
            width: 100%;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            font-size: 16px;
        }

        /* Submit button styling */
        input[type="submit"] {
            background-color: #008CBA;
            color: white;
            border: none;
            padding: 12px 20px;
            display: inline-block;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            width: 100%;
            max-width: 200px; /* Limit maximum width */
            text-align: center;
        }

        input[type="submit"]:hover {
            background-color: #005F6B;
        }

        .card {
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 10px; /* Adjust margin for spacing */
            transition: box-shadow 0.3s ease;
        }

        .card:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }

        .data-description {
            color: #888;
            font-style: italic;
            margin-top: 10px;
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

<div class="container">
    <div class="selection-area">
        <h2>Select an Option:</h2>
        <form action="After10th2.php" method="post">
            <select id="dropdownOptions" class="search-box" name="selectedValue">
                <option value="">Select an option below...</option>
                <option value="INTERMEDIATE">INTERMEDIATE</option>
                <option value="POLYTECHNIC">POLYTECHNIC</option>
                <option value="ITI">ITI</option>
                <option value="PARAMEDICAL">PARAMEDICAL</option>
                <option value="SHORT_TERM_COURSES">SHORT-TERM COURSES</option>
                <option value="OTHERS">OTHERS</option>
            </select>
            <input type="submit" value="Submit" class="submit-btn">
        </form>
    </div>

    <div class="data-display">
        <?php foreach ($dataPairs as $pair): ?>
            <div class="card">
                <h3><?php echo $pair['Group1']; ?></h3>
                <p><?php echo $pair['desc1']; ?></p>
            </div>
        <?php endforeach; ?>
        <?php if (empty($dataPairs)): ?>
            <div class="card">
                <h3>No Results Found</h3>
                <p>Please select an option above.</p>
            
        <?php endif; ?>
    </div></div>
</div>

</body>
</html>
