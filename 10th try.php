<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dropdown with Search Box</title>
    <!-- Link to external stylesheet if needed -->
    <style>
        /* Global styles */
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
            text-align: right; /* Align links to the right */
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

        /* Form styling */
        .form-container {
            max-width: 500px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);

        }

        .form-container h2 {
            margin-top: 0;
            font-size: 24px;
        }

        /* Search box styling */
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
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-top: 10px;
            cursor: pointer;
            border-radius: 5px;
        }

        input[type="submit"]:hover {
            background-color: #005F6B;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="logout.php">Logout</a>
        <a href="#">Services</a>
        <a href="#">About</a>
        <a href="home.php">Home</a>
    </div>

    <div class="form-container">
        <h2>Select an Option:</h2>
       
        
        <select id="dropdownOptions" class="search-box" name="selectedValue">
            <option value="">Select an option below...</option>
            <option value="INTERMEDIATE">INTERMEDIATE</option>
            <option value="POLYTECHNIC">POLYTECHNIC</option>
            <option value="ITI">ITI</option>
            <option value="PARAMEDICAL">PARAMEDICAL</option>
            <option value="SHORT_TERM_COURSES">SHORT-TERM COURSES</option>
            <option value="OTHERS">OTHERS</option>
        </select>
        
        
        <!-- Form submission -->
        <form action="After10th2.php" method="post">
        
            <input type="submit" value="Submit">
        
        </form>
    </div>

    <!-- JavaScript to update search box and hidden input -->
 
</body>
</html>
