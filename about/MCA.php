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
Nathan Andemichael,Ethan Byrne,Britney Castillo-Huitzil, Sharon Chen, 
Charlotte Cohick, Micah Cruz, Jayla Delgado, 
Nate Frey,
Wesley Groff,  
<a href='evan.php'>Evan Harner</a>, 
Devin Hershey,
Brayden Jones,
Nathan Lama, 
Cooper Lehman, 
Ryan Lefever, 
Benson Liu, 
Beckett Mann, 
Oliver Merrell, 
Selena Monk, 
<a href='Gabriel.php'>Gabriel Perkins,</a> 
Orlando Santiago, 
Brian Shore, 
Henry Sokra, 
Daniel Spooner,
Luca Suliveras, 
Abdullah Sultan,
Abdullah Tanis, 
Jace Witmer, 
 <a href='student_template.php'>Jane Doe</a>
            </span>
        </div>
    </div>
	<?php
    require "../includes/footer.php";
    ?>
</body>

</html>
