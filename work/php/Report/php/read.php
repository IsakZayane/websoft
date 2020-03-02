<?php 
require "database/config.php";
require "src/functions.php";
$pageTitle = "Tha Read";


// Get incoming values
$search = $_GET["search"] ?? null;
$like = "%$search%";

    // Connect to the database
 $db = connectDatabase($dsn);

    // Prepare and execute the SQL statement
    $sql = <<<EOD
SELECT
    *
FROM parts;
EOD;
    $stmt = $db->prepare($sql);
    $stmt->execute([$search, $like, $like]);

    // Get the results as an array with column names as array keys
    $res = $stmt->fetchAll();


?>
<!-- END OF PHP -->

<!DOCTYPE html>
<html lang="en">
<body>
<?php require __DIR__ . "./../view/header.php"  ?>



<?php if ($search) : ?>
    <table id = "tableClass">
        <tr>
            <th>Name</th>
            <th>Cost</th>
        </tr>

    <?php foreach ($res as $row) : ?>
        <tr >
            <td id = "tabCell"><?= $row["idparts"] ?></td>
            <td id = "tabCell"><?= $row["Name"] ?></td>
            <td id = "tabCell"  ><?= $row["Cost"] ?></td>
        </tr>
    <?php endforeach; ?>

    </table>
<?php endif; ?>

<?php require __DIR__ . "./../view/footer.php"  ?>

</body>
</html>