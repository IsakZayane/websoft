<?php
require "database/config.php";
require "src/functions.php";
// Get incoming values

$pageTitle = "Delete";
$item  = $_GET["item"] ?? null;
$idparts    = $_POST["idparts"] ?? null;
$name = $_POST["Name"] ?? null;
$cost  = $_POST["Cost"] ?? null;
$delete  = $_POST["delete"] ?? null;



$db = connectDatabase($dsn);

$sql = "SELECT * FROM parts";
$stmt = $db->prepare($sql);
$stmt->execute();
$res1 = $stmt->fetchAll();

if ($item){
    $sql = "SELECT * FROM parts WHERE idparts = ?";
    $stmt = $db->prepare($sql);
    $stmt->execute([$item]);
    $res2 = $stmt->fetch();

}


if ($delete) {
    $sql = "DELETE FROM parts WHERE idparts = ?";
    $stmt = $db->prepare($sql);
    $stmt->execute([$idparts]);

    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}
?>
<!-- End of php-->
<!DOCTYPE html>
<html lang="en">

<body>
<?php require __DIR__ . "./../view/header.php"  ?>
    
<h1>Delete a row from the table</h1>

<form>
    <select name="item" onchange="this.form.submit()">
        <option value="-1">Select item</option>

        <?php foreach ($res1 as $row) : ?>
            <option value="<?= $row["idparts"] ?>"><?= "(" . $row["idparts"]. ") " . $row["Name"] ?></option>
        <?php endforeach; ?>

    </select>
</form>


<?php if ($res2 ?? null) : ?>
<form method="post">
    <fieldset>
        <legend>Delete</legend>
        <p>
            <label>Id: 
                <input type="text" readonly="readonly" name="idparts" value="<?= $res2["idparts"] ?>">
            </label>
        </p>
        <p>
            <label>Label: 
                <input type="text" name="Name" value="<?= $res2["Name"] ?>">
            </label>
        </p>
        <p>
            <label>Type: 
                <input type="text" name="Cost" value="<?= $res2["Cost"] ?>">
            </label>
        </p>
        <p>
            <input type="submit" name="delete" value="Delete">
        </p>
    </fieldset>
</form>
<?php endif; ?>
<?php if ($res1 ?? null) : ?>
    <table>
        <tr>
            <th>Name</th>
            <th>Cost</th>
        </tr>

    <?php foreach ($res1 as $row) : ?>
        <tr>
            <td><?= $row["idparts"] ?></td>
            <td><?= $row["Name"] ?></td>
            <td><?= $row["Cost"] ?></td>
        </tr>
    <?php endforeach; ?>

    </table>
<?php endif; ?>




<?php require __DIR__ . "./../view/footer.php"  ?>

</body>
</html>