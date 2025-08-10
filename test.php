<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academic Navigator</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #333;
    color: white;
    padding: 15px 20px;
}

.navbar-item {
    color: white;
    text-decoration: none;
    margin: 0 10px;
}

.hero-section {
    background: url('hero-image.jpg') no-repeat center center;
    background-size: cover;
    height: 300px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    text-align: center;
}

.hero-content {
    background: rgba(0, 0, 0, 0.5);
    padding: 20px;
    border-radius: 10px;
}

.content-section {
    padding: 40px 20px;
    max-width: 800px;
    margin: auto;
}

.stages-grid {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
}

.stage-item {
    background: #f4f4f4;
    padding: 20px;
    margin: 10px;
    border-radius: 10px;
    width: 200px;
    text-align: center;
}

.footer {
    background: #333;
    color: white;
    text-align: center;
    padding: 10px;
}

form {
    display: flex;
    flex-direction: column;
}

input, textarea, button {
    margin-bottom: 10px;
    padding: 10px;
    font-size: 16px;
}

button {
    background-color: #333;
    color: white;
    border: none;
    cursor: pointer;
}

</style>
<body>
    <header class="navbar">
        <div class="navbar-left">
            <a href="#" class="navbar-item"><b>Academic</b> Navigator</a>
        </div>
        <div class="navbar-right">
            <a href="#home" class="navbar-item">Home</a>
            <a href="#stages" class="navbar-item">Academic Stages</a>
            <a href="#about" class="navbar-item">About</a>
            <a href="#contact" class="navbar-item">Contact</a>
        </div>
    </header>
    <section id="home" class="hero-section">
        <div class="hero-content">
            <h1>Welcome to Academic Navigator</h1>
            <p>Your guide to educational and career paths from playschool to professional courses.</p>
        </div>
    </section>
    <section id="stages" class="content-section">
        <h2>Explore Academic Stages</h2>
        <div class="stages-grid">
            <div class="stage-item"><a href="#playschool">Playschool</a></div>
            <div class="stage-item"><a href="#primary">Primary School</a></div>
            <div class="stage-item"><a href="#middle">Middle School</a></div>
            <div class="stage-item"><a href="#high">High School</a></div>
            <div class="stage-item"><a href="#plus2">After Plus 2</a></div>
            <div class="stage-item"><a href="#higher">Higher Education</a></div>
            <div class="stage-item"><a href="#professional">Professional Courses</a></div>
        </div>
    </section>

    <section id="playschool" class="content-section">
        <h2>Playschool</h2>
        <p>Playschool education is the foundation of a child's learning journey. It focuses on the development of basic skills through play and interactive activities.</p>
        <ul>
            <li>Importance of early childhood education</li>
            <li>Types of activities and learning methods</li>
            <li>Preparing for primary school</li>
        </ul>
    </section>

    <section id="primary" class="content-section">
        <h2>Primary School</h2>
        <p>Primary education marks the beginning of formal education. It aims to provide children with fundamental knowledge and skills in various subjects.</p>
        <ul>
            <li>Core subjects: Mathematics, Science, Language</li>
            <li>Development of basic literacy and numeracy skills</li>
            <li>Extracurricular activities</li>
        </ul>
    </section>

    <section id="middle" class="content-section">
        <h2>Middle School</h2>
        <p>Middle school serves as a transitional phase from primary to high school. It focuses on the intellectual and social development of students.</p>
        <ul>
            <li>Introduction to more specialized subjects</li>
            <li>Development of critical thinking and problem-solving skills</li>
            <li>Extracurricular opportunities and personal growth</li>
        </ul>
    </section>

    <section id="high" class="content-section">
        <h2>High School</h2>
        <p>High school education prepares students for higher education and career choices. It offers a range of subjects and streams to choose from.</p>
        <ul>
            <li>Science Stream: Physics, Chemistry, Biology, Mathematics</li>
            <li>Commerce Stream: Accountancy, Business Studies, Economics</li>
            <li>Arts Stream: History, Political Science, Sociology</li>
            <li>Importance of high school for career planning</li>
        </ul>
    </section>

    <section id="plus2" class="content-section">
        <h2>After Plus 2</h2>
        <h3>MPC (Mathematics, Physics, Chemistry)</h3>
        <p>The MPC stream offers numerous career options in science and technology. Here are some popular courses:</p>
        <ul>
            <li>Engineering
                <ul>
                    <li>Mechanical Engineering</li>
                    <li>Electrical Engineering</li>
                    <li>Civil Engineering</li>
                    <li>Computer Science Engineering</li>
                    <li>Electronics and Communication Engineering</li>
                </ul>
            </li>
            <li>Architecture</li>
            <li>Computer Applications (BCA)</li>
            <li>Pure Sciences (B.Sc. in Physics, Chemistry, Mathematics)</li>
        </ul>
        <h4>Entrance Exams</h4>
        <ul>
            <li>JEE Main and Advanced</li>
            <li>BITSAT</li>
            <li>State-level engineering entrance exams (MHT-CET, KEAM, etc.)</li>
        </ul>

        <h3>BIPC (Biology, Physics, Chemistry)</h3>
        <p>The BIPC stream is ideal for students interested in the medical and life sciences fields. Here are some popular courses:</p>
        <ul>
            <li>Medical
                <ul>
                    <li>MBBS (Bachelor of Medicine, Bachelor of Surgery)</li>
                    <li>BDS (Bachelor of Dental Surgery)</li>
                    <li>BAMS (Bachelor of Ayurvedic Medicine and Surgery)</li>
                    <li>BHMS (Bachelor of Homeopathic Medicine and Surgery)</li>
                </ul>
            </li>
            <li>Pharmacy (B.Pharm)</li>
            <li>Nursing (B.Sc. Nursing)</li>
            <li>Biotechnology</li>
            <li>Microbiology</li>
            <li>Agricultural Sciences</li>
        </ul>
        <h4>Entrance Exams</h4>
        <ul>
            <li>NEET (National Eligibility cum Entrance Test)</li>
            <li>AIIMS Entrance Exam</li>
            <li>State-level medical entrance exams (EAMCET, etc.)</li>
        </ul>
    </section>

    <section id="higher" class="content-section">
        <h2>Higher Education</h2>
        <p>Higher education encompasses undergraduate, postgraduate, and doctoral programs. Here are some popular options:</p>
        <ul>
            <li>Bachelor's Degrees (B.A., B.Sc., B.Com, B.Tech, etc.)</li>
            <li>Master's Degrees (M.A., M.Sc., M.Com, M.Tech, MBA, etc.)</li>
            <li>Doctoral Programs (Ph.D.)</li>
        </ul>
    </section>

    <section id="professional" class="content-section">
        <h2>Professional Courses</h2>
        <p>Professional courses offer specialized training and certification in various fields. Here are some examples:</p>
        <ul>
            <li>Chartered Accountancy (CA)</li>
            <li>Company Secretary (CS)</li>
            <li>Certified Financial Planner (CFP)</li>
            <li>Project Management Professional (PMP)</li>
            <li>Data Science and Analytics</li>
            <li>Digital Marketing</li>
            <li>Graphic Designing</li>
        </ul>
    </section>

    <section id="about" class="content-section">
        <h2>About</h2>
        <p>Academic Navigator is a comprehensive web-based platform designed to guide students through their academic journeys. Whether you're exploring potential career paths or preparing for entrance exams, Academic Navigator offers a suite of tools and resources to help you succeed. Our platform features a user-friendly interface with intuitive navigation, allowing users to easily access information on various courses, entrance exams, and eligibility criteria. With Academic Navigator, we're committed to empowering students with the knowledge and resources they need to achieve their educational goals.</p>
    </section>

    <section id="contact" class="content-section">
        <h2>Contact</h2>
        <p>Let's get in touch and talk about your next project.</p>
        <form action="/action_page.php" method="post">
            <input type="text" placeholder="Name" required name="Name">
            <input type="email" placeholder="Email" required name="Email">
            <input type="text" placeholder="Subject" required name="Subject">
            <textarea placeholder="Comment" required name="Comment"></textarea>
            <button type="submit">SEND MESSAGE</button>
        </form>
    </section>

    <footer class="footer">
        <p>&copy; 2024 Academic Navigator. All rights reserved.</p>
    </footer>
</body>
</html>
