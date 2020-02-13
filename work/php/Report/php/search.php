<?php
/**
 * A page controller
 */
require "database/config.php";
require "src/functions.php";
$pageTitle = "Search";

// Get incoming values
$search = $_GET["search"] ?? null;
$like = "%$search%";
//var_dump($_GET);

if ($search) {
    // Connect to the database
    $db = connectDatabase($dsn);

    // Prepare and execute the SQL statement
    $sql = <<<EOD
SELECT
    *
FROM parts
WHERE
    idparts = ?
    OR Name LIKE ?
    OR Cost LIKE ?
;
EOD;
    $stmt = $db->prepare($sql);
    $stmt->execute([$search, $like, $like]);

    // Get the results as an array with column names as array keys
    $res = $stmt->fetchAll();
}




?>
<!-- end of php-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php require __DIR__ . "./../view/header.php"  ?>
    
<h1>Search the database</h1>

<form>
    <p>
        <label>Search: 
            <input type="text" name="search" value="<?= $search ?>">
        </label>
    </p>
</form>

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