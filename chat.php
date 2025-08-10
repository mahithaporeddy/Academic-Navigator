<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academic Navigator</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Header Section -->
    <header>
        <div class="header-container">
            <h1>Welcome to Academic Navigator</h1>
            <p>Your ultimate guide to navigating the academic journey from middle school to university.</p>
            <p>At Academic Navigator, we aim to provide students with comprehensive resources and personalized guidance to help them make informed decisions about their education and career paths.</p>
        </div>
    </header>

    <!-- Navigation Links -->
    <nav>
        <ul>
            <li><a href="#middle-school">Middle School</a></li>
            <li><a href="#high-school">High School</a></li>
            <li><a href="#entrance-tests">Entrance Tests</a></li>
            <li><a href="#list-of-universities">List of Universities</a></li>
        </ul>
    </nav>

    <!-- Main Content -->
    <main>
        <section id="middle-school">
            <h2>Middle School</h2>
            <p>Discover the essential subjects and skills to focus on during middle school, along with tips for excelling academically and socially.</p>
        </section>
        <section id="high-school">
            <h2>High School</h2>
            <p>Explore high school courses, extracurricular activities, and preparation strategies for college admissions and future careers.</p>
        </section>
        <section id="entrance-tests">
            <h2>Entrance Tests</h2>
            <p>Get detailed information on various entrance tests required for higher education, including preparation tips and resources.</p>
        </section>
        <section id="list-of-universities">
            <h2>List of Universities</h2>
            <p>Find a comprehensive list of universities, including details on programs offered, admission criteria, and campus life.</p>
        </section>
    </main>

    <!-- Registration Form Section -->
    <section id="guidance-registration">
        <h2>Need Guidance for Your Future?</h2>
        <p>Fill out our registration form to receive personalized guidance and support for your educational and career choices.</p>
        <form action="submit_form.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="phone">Phone:</label>
            <input type="tel" id="phone" name="phone" required>
            <label for="interests">Areas of Interest:</label>
            <textarea id="interests" name="interests" rows="4" required></textarea>
            <button type="submit">Submit</button>
        </form>
    </section>

    <!-- Footer Section -->
    <footer>
        <div class="footer-container">
            <p>&copy; 2024 Academic Navigator. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
