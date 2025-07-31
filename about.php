<?php
session_start()
?>

<html>

<head>
    <title>About</title>
    <link rel="stylesheet" type="text/css" href="stylesheets/about.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar bg-blue">
            <a class="navbar-brand" href="index.php">
                <img id="logo" src="includes/images/logo.png" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">
                                <i class="fas fa-home"></i> Home
                            </a>
                        </li>
                        <?php if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="settings.php">
                                <i class="fas fa-cog"></i> Settings
                            </a>
                        </li>
                        <?php } else { ?>
                            <li class="nav-item">
                                <a class="hidden" href="settings.php">
                                    <i class="fas fa-cog hidden"></i> Settings
                                </a>
                            </li>
                        <?php } ?>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">
                                <i class="fas fa-info-circle"></i> About
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="games/menu.php">
                                <i class="fas fa-gamepad"></i> Games
                            </a>
                        </li>

                        <!-- Checking whether to display login or logout button. -->
                        <?php if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">
                                <i class="fas fa-key"></i> Logout
                            </a>
                        </li>
                        <?php } else { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">
                                <i class="fas fa-key"></i> Login
                            </a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
        </nav>
    </header>

    <main>
        <section id="ourVision">
            <div class="ourVision-textContainer">
                <br>
                <div id="welcome-text">Our Vision</div>
                <br>
                    <div id="welcome-subtext">This website will primarily be to showcase student projects
                        and to teach Git.
                    </div>
                <br>
            </div>
        </div>    
        </section>

        <section id="foundingTeam">
            <div class="foundingTeam-textContainer">
                <br>
                <div id="welcome-text-2">2025 Momentum Coding Academy</div>
                <br>
                    <div id="welcome-subtext-2">Our class is comprised of the students in Professor Reddig's CS 102 summer class "Coding and Careers".
            
                    <br><br>
                    Want to know more about the 2025 students?  
                    <a href="about/MCA.php"> <br> Click Here ...</a>
                    </div>
                <br>
            </div>
        </div>
        </section>
        
        <section id="break">
        <br>
        </section>

        <section id="etownECS">
            <div class="etownECS-textContainer">
                <br>
                <div id="welcome-text-2">Etown's Computer Science Department</div>
                <br>
                    <div id="welcome-subtext-2"> "Elizabethtown College’s Computer Science program is a multidisciplinary curriculum woven with 
                        real-world experiences that prepares graduates for lucrative careers in software engineering, full-stack web and application 
                        development, artificial intelligence, and cyber security. Computer Science is perfect for anyone who likes being on the cutting 
                        edge of technology and innovation in today’s digital society.
                        <br>
                        Students learn best by doing, including working on real-world team projects using industry-relevant collaboration tools such as 
                        Scrum and GitHub, cloud computing technologies, and cyber security measures. We offer a Computer Science degree that prepares you 
                        in a variety of areas, so your career can evolve with technology." <br> -Elizabethtown College

                        <br><br> Want to know more about our Computer Science Department?  
                        <a href="https://www.etown.edu/schools/school-of-engineering-and-computer-science/computer-science/index.aspx"> <br> Click Here ...</a>
                    <br><br>
                    <div id="seTitle"> Software Engineering: </div>
                    <br> 
                    An introduction to software development methodologies including requirements specification, design, 
                    testing, maintenance, and documentation. Students will participate in a large software development project using version control 
                    software.
                    <br><br>
                    
                    </div>
                <br>
            </div>
        </div>
        </section>

        <section id="break">
        <br>
        </section>

    </main>

    <footer>
        <?php
        require_once "includes/footer.php";
        ?>
    </footer>

</body>
</html>