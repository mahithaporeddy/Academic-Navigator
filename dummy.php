
include 'connection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedValue = $_POST['selectedValue'];
    // Handle form submission if needed
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dropdown with Text Box Update</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            position: relative;
        }
        .textbox-dropdown {
            position: relative;
            width: 100%;
            max-width: 300px;
            margin: 0 auto;
        }
        #textbox {
            padding: 10px;
            font-size: 16px;
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            padding-right: 30px;
        }
        .dropdown-icon {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
            font-size: 20px;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #ffffff;
            min-width: 100%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 4px;
            z-index: 1;
            margin-top: 5px;
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
        .submit-btn {
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 20px;
        }
        .submit-btn:hover {
            background-color: #218838;
        }
    </style>
    <!-- <script>
        function updateTextbox(value) {
            document.getElementById('textbox').value = value;
            var form = document.getElementById('dropdownForm');
            switch(value) {
                case 'INTERMEDIATE':
                    form.action = 'After10th2.php';
                    break;
                case 'POLYTECHNIC':
                    form.action = 'After10th3.php';
                    break;
                case 'ITI':
                    form.action = 'iti.php';
                    break;
                case 'PARAMEDICAL':
                    form.action = 'paramedical.php';
                    break;
                case 'SHORT-TERM COURSES':
                    form.action = 'shortterm.php';
                    break;
                case 'OTHERS':
                    form.action = 'others.php';
                    break;
              
            }
            toggleDropdown();
        }

        function toggleDropdown() {
            var dropdownContent = document.getElementById('dropdownContent');
            dropdownContent.style.display = dropdownContent.style.display === 'block' ? 'none' : 'block';
        } -->

        
    <!-- </script> -->
</head>
<body>
    <div class="container">
        <form id="dropdownForm" action="After10th2.php" method="post">
            <div class="textbox-dropdown">
                <input type="text" id="textbox" name="selectedValue" placeholder="Selected value will appear here" readonly>
                <div class="dropdown-icon" onclick="toggleDropdown()">&#9660;</div>
                <div class="dropdown-content" id="dropdownContent">
                    <a href="#" onclick="updateTextbox('INTERMEDIATE')">INTERMEDIATE</a>
                    <a href="#" onclick="updateTextbox('POLYTECHNIC')">POLYTECHNIC</a>
                    <a href="#" onclick="updateTextbox('ITI')">ITI</a>
                    <a href="#" onclick="updateTextbox('PARAMEDICAL')">PARAMEDICAL</a>
                    <a href="#" onclick="updateTextbox('SHORT-TERM COURSES')">SHORT-TERM COURSES</a>
                    <a href="#" onclick="updateTextbox('OTHERS')">OTHERS</a>
                </div>
            </div>
            <input type="submit" value="Submit" class="submit-btn">
        </form>
    </div>
</body>
</html>
