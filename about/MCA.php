<?php
$pageName = "SE 2024 Webpage";
require "../includes/functions.php";
require "../includes/head.php";

?>

<body>
    <?php
    require "../includes/navbar.php";
    ?>
    <div class="buttons">
        <a href="../about.php"><button class="button button2">Go Back!</button></a>
    </div>

    <div class="team-section">

        <div id="welcome-text">THE 2025 MOMENTUM CODING ACADEMY PAGE</div>
        <br>
        <div class="section"> These projects were taken on by the Summer 2025 Coding and Careers class. <BR></div>
        <br>
        <div class="pfp">
            <img id="Team2025Pic" src="teampics/MCA.jpg" alt="2025 Class picture." width=1000 usemap="#classmap">
            <map id="classmap">
                <area shape="circle" coords="225,83,20" href="student_template.php">
            </map>    
        </div>

        <div class="section" id="team-names">
            <!-- <span class="name">From Left to Right: </span>  -->
            <span class="name">
Nathan Andemichael,<a href='byrne.php'>Ethan Byrne</a>,Britney Castillo-Huitzil, Sharon Chen, 
Charlotte Cohick, Micah Cruz, Jayla Delgado, 
Nate Frey,
<a href="wesley.php">Wesley Groff,</a>  
<a href='evan.php'>Evan Harner</a>, 
Devin Hershey,
Brayden Jones,
<a href="nathan_lama.php">Nathan Lama,</a>
<a href="cooper.php">Cooper Lehman,</a> 
<a href='Ryan.php'>Ryan Lefever,</a>
Benson Liu, 
<a href="Oliver.php">Oliver Merrell</a>, 
<a href='beckett.php'>Beckett Mann,</a>
Oliver Merrell, 
Selena Monk, 
<a href='Gabriel.php'>Gabriel Perkins,</a> 
<a href="Orlando.php">Orlando Santiago</a>
Brian Shore, 
<a href="Henry.php">Henry Sokra,</a> 
<a href='daniel.php'>Daniel Spooner,</a>
Luca Suliveras, 
Abdullah Sultan,
Abdullah Tanis, 
<a href='witmer.php'>Jace Witmer, </a>
 <a href='student_template.php'>Jane Doe</a>
            </span>
        </div>
    </div>
	<?php
    require "../includes/footer.php";
    ?>
</body>

</html>
