<?php 
$pageTitle = "Playground";
?>

<!DOCTYPE html>
<html lang="en">



<body>

<?php require __DIR__ . "./../view/header.php"  ?>

    <header>Playground</header>

    <button id="playButton">Play a game</button>


    <!-- <div id="pointCounter" class="pointCounter">
        POINTS: <br />
        <span id="points">0</span>
    </div> -->

    <canvas id="myCanvas" width="480" height="320"></canvas>
    <h1>Sup duderino</h1>


    <div id="mygga" class="mygga"></div>




    <?php require __DIR__ . "./../view/footer.php"  ?>

    <!--<script src="../js/mygga.js"></script> -->
    <script src="../js/testGame.js"></script>

    <!-- <script src="../js/alertScript.js"></script> -->


</body>

</html>