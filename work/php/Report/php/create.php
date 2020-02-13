

<?php
require "database/config.php";
require "src/functions.php";
$pageTitle = "Create";

$name  = $_POST["Name"] ?? null;
$cost   = $_POST["Cost"] ?? null;
$create = $_POST["create"] ?? null;

if ($create){
    $db = connectDatabase($dsn);

    $sql = "INSERT INTO parts (Name, Cost) VALUES (?, ?)";
    $stmt = $db->prepare($sql);
    $stmt->execute([ $name, $cost]);

    // Get the results as an array with column names as array keys
    $sql = "SELECT * FROM parts";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $res = $stmt->fetchAll();


}
?>
<!-- End of PHP-->
<!DOCTYPE html>
<html lang="en">

<body>
<?php require __DIR__ . "./../view/header.php"  ?>

<form method="post">
    <fieldset>
        <legend>Create</legend>
        <p>
            <label>Name: 
                <input type="text" name="Name" placeholder="Enter name of part">
            </label>
        </p>
        <p>
            <label>Type: 
                <input type="text" name="Cost" placeholder="Enter price of part">
            </label>
        </p>
        <p>
            <input type="submit" name="create" value="Create">
        </p>
    </fieldset>
</form>

<?php if ($res ?? null) : ?>
    <table>
        <tr>
            <th>Label</th>
            <th>Type</th>
        </tr>

    <?php foreach ($res as $row) : ?>
        <tr>
            <td id = "tableCell"><?= $row["idparts"] ?></td>
            <td id = "tableCell"><?= $row["Name"] ?></td>
            <td id = "tableCell"><?= $row["Cost"] ?></td>
        </tr>
    <?php endforeach; ?>

    </table>
<?php endif; ?>


<?php require __DIR__ . "./../view/footer.php"  ?>

</body>
</html>