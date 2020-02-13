<?php 
$pageTitle = "Flags";
?>

<!DOCTYPE html>
<html lang="en">


<body>
<?php require __DIR__ . "./../view/header.php"  ?>

    <p>Add another page flag.html which has three links showing three different country names. </br>Each country flag should be displayed when the user clicks the country link. The flags should be created using pure HTML/CSS (no images).</p>

    <section class="flagSection">
        <ul>
            <li class="FLAG"><a onclick="displayFlag('Sweden'); return false;">Sweden</a></li>
            <li class="FLAG"><a onclick="displayFlag('Finland'); return false;">Finland</a></li>
            <li class="FLAG"><a onclick="displayFlag('Japan'); return false;">Japan</a></li>
        </ul>

        <ul class="actualFlag">
            <li>
                <div class="Sweden" id="Sweden"> </div>
            </li>
            <li>
                <div class="Finland" id="Finland"> </div>
            </li>
            <li>
                <div class="Japan" id="Japan"></div>
            </li>
        </ul>

    </section>


    <?php require __DIR__ . "./../view/footer.php"  ?>


    <script src="../js/flags.js"></script>


</body>

</html>