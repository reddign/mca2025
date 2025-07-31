<?php
$pageName = "Jane Doe's Webpage";
require "../includes/functions.php";
require "../includes/head.php";

?>
<body>
<?php
     require "../includes/navbar.php";
?>
   
    <div class="buttons">
        <a href="MCA.php"><button class="button button2">Go Back!</button></a> 
    </div>
        
    <main>
        <section id="Daniel's Bio">
            <div class="bio-title">Daniel</div>
            <br>
            <div id="bio"> Daniel is a student in this class. He is a junior at Hempfield HS.
                He is thinking about majoring in Computer Science, but without any designated concentration or minor, 
                but intends to graduate in 2031 from College or University.
        </section>
    </main>
</body>
<?php
     require "../includes/footer.php";
?>