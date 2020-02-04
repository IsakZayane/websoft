<?php
/**
 * Pagecontroller showing how to work with classes
 * and objects.
 */
require __DIR__ . "/src/person.php";

$person1 = new Person();
$person2 = new Person();

$person1->setName("Mikael");
$person1->setOccupation("teacher");
//echo "<p>" . $person1->getDetails();

$person2->setName("Mumintrollet");
//echo "<p>" . $person2->getDetails();


?><h1>Show off PHP and classes</h1>

<p>Person 1: <?= $person1->getDetails() ?></p>
<p>Person 2: <?= $person2->getDetails() ?></p>

<p>Review the documentation on <a href="https://www.php.net/manual/en/language.oop5.php">PHP Classes and Objects</a>.</p>

<p>In larger programs, the source files for the classes would be loaded throught the <a href="https://www.php.net/manual/en/language.oop5.autoload.php">auto loader</a>. You would also use <a href="https://www.php.net/manual/en/language.namespaces.php">namespaces to maintain scope in a larger codebase</a>.</p>
