<?php 
$pageTitle = "Home";

?>

<!DOCTYPE html>
<html lang="en">



<body class="body">


<?php 
require __DIR__ . "./../view/header.php"  ?>



    <header>Home</header>


    <div id="duck" class="duck"></div>
    <img class="profilePic" src="../resources/profilepic.jpg" alt="Isak" height="420" width="420">

    <p>
        This is my first selfmade webpage. Looks like its from the 80's. But, it is not! It is actually made in the year 2020. Amazing huh?</br>
        I will be using this site to reort my assignments through the course, you can see the reports in the report section above. </br>
        </br>
        So, who am I? </br>
        My name is Isak Zayane and I currently live and study in Kristianstad. I was born outside of Stockholm and lived there for 23 years with my family. </br>
        As a child i played hockey and skated alot, eventually i quit hockey but kept skating. Unfortunately i fell twice and twisted my both legs which led to me sitting by my computer alot. </br>
        At the computer i played alot of Counter-Strike and I never actually wrote a line of code before starting my studies here in Kristianstad University. </br>

        It's my dog Zorro on the picture above. There he gets to see what land belongs to him, as in the Lion King. He is a chiuauha and he likes to bark at people and chew on sticks.</br>
        He weights about 3kg

    </p>


    <?php require __DIR__ . "./../view/footer.php"  ?>

    <script src="../js/duck.js"></script>

</body>

</html>