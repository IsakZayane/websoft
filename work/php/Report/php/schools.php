<?php 
$pageTitle = "Schools";
?>

<!doctype html>
<html>


<body>
<?php require __DIR__ . "./../view/header.php"  ?>


    <h1>My Mega Sandbox</h1>
    <div id="duck" class="duck"></div>

    <select id ="selectOption">
    <option value = "1080">1080 </option>
    <option value = "1081">1081 </option>
    <option value = "1082">1082 </option>
    <option value = "1083">1083 </option>
    </select>
    <button id="myButton">Click Me</button>

    <div id="content"></div>
    <script src="../js/main.js"></script>

    <script src="../js/duck.js"></script>

<?php require __DIR__ . "./../view/footer.php"  ?>
   
</body>

</html>