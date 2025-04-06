<h2>Ballina</h2>
<?php
// Variabla, konstanta, var_dump
$name = "Ardit";
$age = 22;
define("APP_NAME", "AplikacioniPHP");

echo "Përdoruesi: $name - Mosha: $age<br>";
var_dump($name);

// Arrays
echo "<h3>Array shembuj:</h3>";
$numArray = [3, 1, 2];
$assocArray = ["emri" => "Ardit", "mosha" => 22];
$multiArray = [
    ["a", "b"],
    ["c", "d"]
];

print_r($numArray);
echo "<br>";
print_r($assocArray);
echo "<br>";

// Sortime
sort($numArray);
echo "Pas sort(): ";
print_r($numArray);

// Kushtëzime
echo "<h3>Kushtëzime:</h3>";
if ($age > 18) {
    echo "Përdoruesi është i rritur.";
} else {
    echo "Përdoruesi është i mitur.";
}

// Funksion
function pershendetje($emri) {
    return "Pershendetje, $emri!";
}
echo "<br>" . pershendetje($name);

// Variabla globale
echo "<br><br><h3>Variabla globale:</h3>";
$_SERVER['test'] = "Ky është një test";
echo $_SERVER['test'];
?>

