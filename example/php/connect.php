<?php
/**
 * A page controller
 */
require "config.php";
require "src/functions.php";

// Connect to the database
$db = connectDatabase($dsn);

// Prepare and execute the SQL statement
$stmt = $db->prepare("SELECT * FROM tech");
$stmt->execute();

// Get the results as an array with column names as array keys
$res = $stmt->fetchAll();




?><h1>Connect to the database</h1>

<p>Show some content in a table.</p>

<table>
    <tr>
        <th>Label</th>
        <th>Type</th>
    </tr>

<?php foreach($res as $row) : ?>
    <tr>
        <td><?= $row["id"] ?></td>
        <td><?= $row["label"] ?></td>
        <td><?= $row["type"] ?></td>
    </tr>
<?php endforeach; ?>

</table>
