<?php
include 'connection.php';

$group1Options = [];
$sqlOptions = "SELECT DISTINCT group1 FROM entrance";
$resultOptions = $con->query($sqlOptions);
if ($resultOptions->num_rows > 0) {
    while ($row = $resultOptions->fetch_assoc()) {
        $group1Options[] = $row["group1"];
    }
}

$dataPairs = [];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedValue = $con->real_escape_string($_POST['selectedValue']);
    $sql = "SELECT `entrance exam`, eligibility FROM entrance WHERE group1 = '$selectedValue'";
    $result = $con->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $dataPairs[] = array('entrance exam' => $row["entrance exam"], 'eligibility' => $row["eligibility"]);
        }
    } else {
        $dataPairs[] = array(
            'entrance exam' => "0 results",
            'eligibility' => "0 results"
        );
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrance Exam and Eligibility</title>
    <style>
    
    
        body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color:white;
        border-radius:15px;
        overflow-y:auto;
     
    }
    .col {
            width: 100%;
            text-align: center;
            overflow-y: auto;
            max-height: 500px;
            padding: 10px;
            margin-top: 10px;
            min-height: 100px; /* Set a minimum height for consistency */
            max-height: 400px; /* Limit maximum height to avoid excessive scrolling */
            overflow: auto; /* Enable scrolling if needed */
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
    .image{
        background-image: url("https://kce.ac.in/new/wp-content/uploads/2023/07/The-DOS-and-Donts-to-Crack-any-Entrance-Exam-1024x536.jpg");
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
            margin-bottom:40px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            height:470px;
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
        .right-column {
            background-color: #ffffff;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            flex: 1; /* Allow the column to grow */
        }

        h2 {
            margin-bottom: 20px;
            color: black;
            font-size: 24px;
        }
        h4 {
            margin-top:0;
            color: black;
            font-size: 24px;
            text-align:center;
        }
        h3 {
          
            font-size: 30px;
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

        

       
        #textbox {
            margin-top: 20px;
            padding: 10px;
            font-size: 16px;
            width: 100%;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .submit-btn {
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
            width: 100%;
            transition: background-color 0.3s ease;
        }

        .submit-btn:hover {
            background-color: #218838;
        }

        .data-pair {
            margin: 20px 0;
            padding: 15px;
            background-color: #f0f2f5;
            border-radius: 5px;
            border-left: 5px solid #007bff;
        }

        .data-pair h3 {
            margin: 0 0 10px;
            font-size: 18px;
            color: #007bff;
        }

        .data-pair h2 {
            margin: 0 0 10px;
            font-size: 20px;
            color: green;
        }
        footer {
    background-color: #333;
    color: white;
    padding: 10px;
    margin-left: 20px;
    margin-right: 20px;
}

.footer-container {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    padding: 20px;

    /* margin-top: 30px; */
}

.footer-section {
    flex: 1;
    margin: 20px;
    min-width: 200px;
}

.footer-section h4 {
    font-size: 18px;
    letter-spacing: 4px;
    margin-bottom: 30px;
}

.footer-section p, .footer-section ul, .footer-section a {
    font-size: 14px;
    color: #bbb;
    text-decoration: none;
    letter-spacing: 4px;
    line-height:20px;
    margin-left:30px;
}

.footer-section ul {
    list-style: none;
    padding: 0;
    letter-spacing: 4px;
}

.footer-section ul li {
    margin-bottom: 10px;
    letter-spacing: 4px;
}

.footer-section ul li a:hover {
    color: white;
}

.social-links {
    display: flex;
    margin-left:120px;
}

.social-links a {
    margin-right: 10px;
    margin-left:20px;
}

.social-links img {
    width: 24px;
    height: 24px;
}

.footer-bottom {
    text-align: center;
    margin-top: 20px;
    border-top: 1px solid #444;
    padding-top: 10px;
}

.footer-bottom p {
    font-size: 14px;
    color: #bbb;
}

    </style>
    <script>
        function updateTextbox(value) {
            document.getElementById('textbox').value = value;
            // Close dropdown immediately after selection
            document.querySelector('.dropdown-content').style.display = 'none';
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
            <a href="#Contact" class="navbar-item">Contact</a>
            <a href="#" class="navbar-item">Log-out</a>
        </div></div>
    <div class="image">
        </div>
        <div class="content">
        <p>After completing the 10th class, students stand at a crucial juncture in their academic journey. This phase marks the beginning of specialization in their studies, guided by their interests, strengths, and career aspirations. Depending on their chosen stream, students can pursue various entrance tests that will shape their future paths.Students inclined towards scientific exploration may delve into fields such as engineering, medicine, or technology. For those with a strategic mindset and an interest in commerce, subjects like economics, finance, and business management offer pathways to careers in banking, entrepreneurship, or corporate leadership.Choosing the right stream and preparing for the corresponding entrance tests can significantly impact a student’s future career prospects, providing a focused and strategic pathway to their desired profession.</p>    </div>
        </div>

    <div class="container" id="container">
        <div class="column left-column">
            <p>Want to know more about entrance exams after 10th?<br>Please select from below dropdown to get the list of entrance exams</p>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <select id="dropdownOptions" class="search-box" name="selectedValue">
                    <option value="">Select an option below...</option>
                    <option value="intermediate">intermediate</option>
                    <option value="polytechnic">polytechnic</option>
                    <option value="iti">iti</option>
                    <option value="paramedical">paramedical</option>
                    <option value="others">others</option>
                </select>
                <input type="submit"value="Submit" class="submit-btn">
            </form>
        </div>
    <div class="column right-column">
        <div class="col" id="dataDisplay"><h3>Details for:</h3>
            <?php
            
            if (!empty($selectedValue)) {
                echo "<h2> $selectedValue</h2>";
                foreach ($dataPairs as $pair) {
                    echo "<div class='data-pair'>";
                    echo "<h3>Entrance Exam</h3>";
                    echo "<h2>{$pair['entrance exam']}</h2>";
                    echo "<h3>Eligibility</h3>";
                    echo "<h2>{$pair['eligibility']}</h2>";
                    echo "</div>";
                }
            }
            else{
              echo "<h5> select group from dropdown</h5>";
            }
            ?>
        </div>
    </div>
</div>
<h4>Want to know  entrance tests after intermediate <a href="eligible2.php">click here</a></h4>
</body>
<footer>
        <div class="footer-container">
            <div class="footer-section">
                <h4>About Us</h4>
                <p>Academic Navigator is your go-to platform for comprehensive information on courses and career options</p>
            </div>
            <div class="footer-section">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="nav.php#home">Home</a></li>
                    <li><a href="nav.php#Careers">Careers</a></li>
                    <li><a href="nav.php#About">About</a></li>
                   
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <p><h4>Contact Us</h4></p>
                <p>Email: info@academicnavigator.com</p>
                <p>Phone: +123-456-7890</p>
                <p>Address: 123 Education Lane, Knowledge City, ED 12345</p>
            </div>
            <div class="footer-section">
                <h4>Follow Us</h4>
                <div class="social-links">
                    <a href="#"><img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBw0NCA0HBw0NBwcHDQ0HBwcHDQ8IDQcNFREWFhURFRUYKDQgGBolJx8VITEhJSkrNTouFx8zODMsNygtLisBCgoKDQ0NFQ0NFTcdFR0rKysrNy4wKy8tLSs3Ky8tKysrNy0vLzArLystLS0tKysrKy8rLSsrKzcrLSstKystK//AABEIAOEA4QMBEQACEQEDEQH/xAAcAAEAAQUBAQAAAAAAAAAAAAAABQECBAYHCAP/xABIEAABAwIABgsOAwYHAAAAAAAAAQIRAwQFE1KRsbMGBxIhIjFBUXFydBQjJTIzNTZTVGFzgYOTFbLCFiRDY8HhJjRCYoKS0f/EABsBAQADAQEBAQAAAAAAAAAAAAABAwYEBQIH/8QANREBAAECAggEBAUEAwAAAAAAAAECAxExBAUzNFFxgbESQVKRExQhYRVTodHwQmPB4SMkMv/aAAwDAQACEQMRAD8AzalR27XfXjXlXnNlERhH0fn8zOK3GOylzqThHBGMq4x2UudRhHBOMqYx2UudRhHBGMmMdlLnUYRwMZMY7KXOowjgYyYx2UudRhHAxkxjspc6jCOBjKuMdlLnUYRwMZUxjspc6k4RwTjJjHZS51IwjgjGTGOylzqMI4GMmMdlLnUYRwMZMY7KXOowjgYyYx2UudScI4GMmMdlLnUjCOBjKuMdlLnUYRwTjJjHZS51GEcEYyYx2UudRhHAxkxjspc6jCOBjKmMdlLnUYRwMZVxjspc6jCOBjJjHZS51GEcDGVMY7KXOowjgYyYx2UudRhHBOMmMdlLnUYRwRjJjHZS51GEcDGTGOylzqMI4GMs/drzrnUowXYo+p47uldJ0RlCqc1skoAEgJAAVAoAASAASAAAJAAAAAAAAAAEgAAAABIHOuYFTx3dK6S+MoVTmtJAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABIHOuYFReG7pXSXxkqnNbJKCQEgJASAkBICQEgJASAkBICQEgJASAkBICQEgJASAkBISSEEgSBQuR9ReG7rLpL4yVzmtklAAASAkBICQACQACQEgJASAkBIABICQEgJASAkBICQACQJGShcjqi8N3SukujJVOa2SUEgJASAkBICQEgJAAJASAkC6kxz3pTpNdVqO8WnTRXud8kImYpjGqcIfVNM1T4aYxlO2ew+/qojnsbaMXluXQ5Pkm+cNzWWj0fSJx5PQtaq0mv6zHhj7pWnsAqR326Yi8qU6SrGdTlnXFPlR+rrp1HV/Vc/T/a9dgC8l3npf3Pn8Y/t/q+vwP8Aufo+NTYDW/h3NN3ufTcz+p9xrijzon3fE6jueVyPZh1thN83yeJrp/sqbjShdTrXR5zxjooq1PpMZYT1QV/ZVbastteMxNZER+4lHby8Syh3WrtF2nx0TjDz71muzV4LkYSxyxUSAkBICQEgJAkZKFyOqLw3dK6S+Mlc5rZCCQEgJASAkBICQEgJASBWQJvY5sdq3z92qrb2NNYqXESr1yW86+84tL02jR4wzq4fu79C0CvSZxyojz/Z0fBeCbe0p4qzppT5H1V4T6vvV3KZ29pFy9ONyf2aexo1qxT4bdOHdnFDoAAAABzLbA89L8Cl+o0uq936yyut966R/lrknovLUkBIFZApICQEkiRk51qPqLw3dK6S+Mlc5rZJCQEgJASAkBICQEgJASBI7H8Fuvb5lo2W0k75c1E/h004/mvEc2laRFi1Nc5+XN06Jo06Rdi3GXnydctbdlGi23t2pTo0URlNjd6EMnXXVXVNVU4zLY0UU0UxRRGEQ+p8vsAAAAADmO2CvhpfgUv1Gm1Vu3WWV1vvXSP8tbk9F5hICQEgJASBSQJGShaj6i8N3SukvjJXOa2QEgJASAkBICQEgJASAkDpW17g9KWDVvXJ37CDt2i81NN5qaV+ZnNa3vHe+HGVPdptUWPBZ+JOdXbybUeW9YAAAAAABy/bCXw0vwKX6jTaq3brLLa33npDW5PReYSAkBIQSEkgUkISMlK5H1F4busukujJXOaySUEgVkCkgJArIFJASAkBIDj3k413k6QO34OoJStKNs1IShSZShPc1DF3a/HcqqnzluLNEUW6aI8ohkFawAAfC9u6dvQddXTkpUKKbp73aPep927dVyqKKIxmXxcuU26ZrrnCIaDhTZ9Wc5WYMpttqSbza1wmMe73xxIe7Z1RREY3Zxn7M/f1xcmcLMYR980Q7ZbhFVnulUnkaxiJoOuNX6N6O7jnWOlT/X2U/avCPtTv+rP/AAn8P0b0H4jpXr7I6/vqtzW7pvHrXrblKe7ciJvJxJvHRatUWqfDRGEOa7dru1eO5OMsaSxWSAkBICQEgJAkpKVyNqLw3dZdJdGSuc1shBICQEgJASAkBICQEgfewburuhTXifWpMX5vRD4uThRVP2ns+7UY3KY+8d3cjFNwAAAHOtsvCLnXVLBjFilQalzWan+p7pRuZNJoNUWYiiq7Oc/RndcXpmumzGUfXq0uT2HjEgJASAkBICQEgJASAkCSkpWo2ovDd1l0l0ZK5zWySEgJASAkBICQEgJASBlYLX9/tu0UNY0qvbKvlPZbY2tHOO7uJi21AAADkezt3h+4nkSkie7gIavVu60de7J6z3qvp2QEnc4SQEgJASAkBICQEgJASEJIpXI2ovDd1l0l0ZK5zWyAkBICQEgJASAkBICQMrBS/v8AbdooaxpXe2VfKeyyxtaOcd3czFNqAAAHIdna+H7jopfkQ1erd1o692T1lvVfTsgJO5xEgJASAkBICQEgJASAkCSKlqNqrw3dZdJbGSuc1skhIQSAkBICQkkIUVycqogwFN2nOmcYSG7TnTOMJGXgp6fiFtvp/mKHL/MaV3o/4q+U9ltja0c47u7GJbQAAAOPbPXJ+0Fykom9S5f5aGs1bH/Vo692U1lvVfTs1/dpzpnO7Bwm7TnTOMJDdpzpnGEisgVkBISSEEhJICQKSEJOSpcjKq8N3WXSWxkrnNbIQSAkBICQEgJA6rteW1J+Aqb6tOnUfjKybp7GuXxuczOtK6o0mYifKGl1ZRTOjRMx5z3bL3DQ9TS+20874tfqn3eh8Oj0wdxUPU0vttHxa/VPufDo9MKpZ0UVFSjSRU30VKbUVFHxK/VJ8Oj0vufD7AAAD41LWk527qUqdR68b3sa5V+Z9xcriMIl8zRTP1mFvcVD1NL7bR8Wv1T7o+HR6YO4qHqaX22j4tfqn3Ph0emDuKh6ml9to+LX6p9z4dHphxPDlVH4TuqjERtN1xV3DWpCI1HKiQbHR6Zps0ROeEMhpFXivVzHGWDJcpJASAkBICQEgSclS5GVV4busukthVOa2SQkBICQEgJASB1za38wU/i1vzGW1rvM8oabVe7Rznu2g816IAAAAAAAAAAfG7qpTt6ldd5KNN9VV5oRVPuinxVRTxl811eGmauEOAq9VVXu33PVXuXnVTcYYfRivuSAkBICQEgJASBJyV4LUZVXhu6y6SyFcrZASAkBICQEgJA67tbeYKfxa35zLa23meUNLqvdo5y2k816IAAAAAAAAAAQuzO4xWAbupxK6ktFP+ao3+p2aBR4tJoj7uTTqvDo9c/ZxOTXsoSAkBICQEgJASBJyVrUZVXhu6y6S2Fc5rZCCQEgJASAkBIHX9rX0fp/FrfnMrrbep5Q02q92jnLaTzXoAAAAAAAAAABp+2jcbjAraPLdV6dP5IiuXQerqejHSJq4RLzNa1YWPDxlyeTTs4SAkBICQEgJASBJla1GVV4busukshXK0BICQACQEgJAy7bCt1RppRtbmvb0UVXJSo1HU2oq8e8hVXYtVz4q6ImeSym9cpjCmqYjm+v49fe2XX3nnz8rY/Lj2fXzF71z7yfj197ZdfeePlbH5ce0HzF71z7yysFYbvXX9sx93cvY+4oMex1Z6o5FqNlFK72jWYt1zFEZT5fZZZv3ZuUxNc5x5y7gY5qwAAA5Js5wvd0sPXFC3ua9CizFbilRquY1ssTiRDUau0e1Vo1NVVETP18vuzmn37tOkVRTVMR9PP7IH8fv/bbn7zzt+Vsflx7OP5m9659z8fv/bbn7zx8rY/Lj2T8ze9c+7Hu8JXFdqMvK9W6Yxd0xtxUdURq86SfdFm3R9aKYjk+K7tdf0rqmWNJYrJAAJASAkBICQJMrWoyqvDd1naSyFc5rZJCQACQEgJAAJASAkDLwOvhG17Tb6xpVf2VfKey2xtaOcPQJh2vAAADi22F6RXP0tW012rN1o692Y1hvNXTs1w73EAJASAkBICQAABICQhKSVLkXV8d3WXSWq5WgAAAAAAAAEgAMvA/nK17Tb6xpVf2VfKeyyxtaecPQZh2vAAADim2H6R3X0tW012rN1o692Y1hvNXTs1w73GAAAAAAASAAAAhKFa5F1V747rO0lkZK5zWySgkBICQEgJASAkBICQMzA6+ErXtNvrGlV/ZV8p7LbG1p5w9CGGa4AAAOJ7Yi/4juvpatprtWbrR17szrDeKunZrcnoOIkBICQEgJASAkBICQEgSklS5GVV747rLpLYyVTmskBICQEgJASAkBICQEgZmBl8JWnarfWNKr+yr5T2W2NrTzh6GMM1oAAAcS2xfSS6+jq2mv1ZutHXuzOsN4q6dmtSd7jJASAkBICQEgJASAkBIErJUtRdXyjusuktjJXOa0IAAAJUCACoAAAAy8DecrTtVvrGlV/ZV8p7LbG1p5w9EGGa0AAAOIbY3pJdfR1bTX6r3Wjr3ZrWG8VdOzWzvcQAAAAKAAKgUAqBQkSpUuRlXyjusukshXOaySUACQEgJASAkBIABIGZgbznadqt9Y0pv7KvlPZbY2tPOHokwzWAAABw/bG9Jbr6Oraa/Ve60de7NafvFXTs1qT0HGAJASAkAAkBICQACQJUqXIuqvfHdZdJbGSqc1shBICQEgJASAkBICQEgZmBV8J2narfWNKr+yr5T2W2NrTzh6KMK1gAAAcO2x/SW6+jq2mv1XulHXuzen7xV/PJrUnoOIASAASAkBICQEgJASBKSVLkZV8o7rLpLYVzmtCAAAAAAAAAAAzMC+c7TtVvrGlV/ZV8p7LbG1p5w9FmFasAAAOG7ZHpLdfR1bTX6r3Sjr3ZvT94q/nk1o9BxgAAAAAAAAABQCVK1yMq+Ud1l0lkZKpzWkoAAAAAAAAAADMwL5ztO1W+taU39lXynstsbSnnD0YYVqwAAA4btkekt19HVtNhqvdKOvdm9P3ir+eTWT0HGAAAAAAAAAAFAJaSpcq/xl6VIStCAAAAAAAAAAAysFecLXtVtrWld7ZV8p7Pu3/7p5x3d5MS04AAAcd2f+kNz0UtW01mrd1o693gabt6v55NeO5yAAAAAAAAAAAJGaVLH/9k=" alt="Facebook"></a>
                    <a href="#"><img src="https://store-images.s-microsoft.com/image/apps.60673.9007199266244427.4d45042b-d7a5-4a83-be66-97779553b24d.5d82b7eb-9734-4b51-b65d-a0383348ab1b?h=210" alt="Twitter"></a>
                    <a href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Instagram_icon.png/2048px-Instagram_icon.png" alt="Instagram"></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Academic Navigator. All rights reserved.</p>
        </div>
    </footer>
</html>
