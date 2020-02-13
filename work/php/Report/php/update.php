<?php

require "database/config.php";
require "src/functions.php";
$pageTitle = "Update";

// Get incoming values
$item  = $_GET["item"] ?? null;
$idparts = $_POST["idparts"] ?? null;
$name = $_POST["Name"] ?? null;
$cost  = $_POST["Cost"] ?? null;
$save  = $_POST["save"] ?? null;

//DB connect
$db = connectDatabase($dsn);

//prepared statement
$sql = "SELECT * FROM parts";
$stmt = $db->prepare($sql);

$stmt->execute();
$res1 = $stmt->fetchAll();

if ($item){

    $stmt = $db->prepare($sql);
    $stmt->execute([$item]);
    $res2 = $stmt->fetch();
}


if ($save) {
        $sql = "UPDATE parts SET Name = ?, Cost = ? WHERE idparts = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$Name, $Cost, $idparts]);
        //var_dump([$label, $type, $id]);
    
        header("Location: " . $_SERVER['PHP_SELF'] . "?item=$idparts");
        exit;
}
    
    

?>
<!-- end of php-->
<!DOCTYPE html>
<html lang="en">

<body>
<?php require __DIR__ . "./../view/header.php"  ?>

<form>
    <select name="item" onchange="this.form.submit()">
        <option value="-1">Select item</option>

        <?php foreach ($res1 as $row) : ?>
            <option value="<?= $row["idparts"] ?>"><?= "(" . $row["idparts"]. ") " . $row["Name"] ?></option>
        <?php endforeach; ?>

    </select>
</form>


<?php if ($res2 ?? null) : ?>

<form method="post" >
    <fieldset>
        <legend>Update</legend>
        <p>
            <label>Id: 
                <input type="text" readonly="readonly" name="id" value="<?= $res2["idparts"] ?>">
            </label>
        </p>
        <p>
            <label>Name: 
                <input type="text" name="name" value="<?= $res2["Name"] ?>">
            </label>
        </p>
        <p>
            <label>Cost: 
                <input type="text" name="cost" value="<?= $res2["Cost"] ?>">
            </label>
        </p>
        <p>
            <input type="submit" name="save" value="Save">
        </p>
    </fieldset>
</form>
<?php endif; ?>

<?php if ($res1 ?? null) : ?>
    <table id = "tableClass">
        <tr>
            <th>Name</th>
            <th>Cost</th>
        </tr>

    <?php foreach ($res1 as $row) : ?>
        <tr>
            <td id = "tabCell"><?= $row["idparts"] ?></td>
            <td id = "tabCell"><?= $row["Name"] ?></td>
            <td id = "tabCell"><?= $row["Cost"] ?></td>
        </tr>
    <?php endforeach; ?>

    </table>
    <?php endif; ?>

<?php require __DIR__ . "./../view/footer.php"  ?>

</body>
</html>