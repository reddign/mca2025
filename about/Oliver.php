<?php
$pageName = "Oliver's Webpage";
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
        <section id="Jane Doe's Bio">
            <div class="bio-title">Jane Doe</div>
            <br>
            <div id="bio"> Oliver is a student in this class. He is a senior at McCaskey HS.
                He doesn't know what he wants to major or minor in, or what college he wants to go to, but he 
                probably wants to major in CS, maybe minor in music or buisness.
        </section>
    </main>
</body>
<?php
     require "../includes/footer.php";
?>