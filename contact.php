
<h2>Kontakt</h2>
<?php
// Validime me RegEx
$email = "test@example.com";
$date = "2025-04-06";
$num = "123-456";

echo "<strong>Validime:</strong><br>";

if (preg_match("/^[\w\.-]+@[\w\.-]+\.\w{2,4}$/", $email)) {
    echo "Email i saktë: $email<br>";
} else {
    echo "Email i pasaktë<br>";
}

if (preg_match("/^\d{4}-\d{2}-\d{2}$/", $date)) {
    echo "Data e saktë: $date<br>";
} else {
    echo "Data e pasaktë<br>";
}

if (preg_match("/^\d{3}-\d{3}$/", $num)) {
    echo "Numri është në format të saktë: $num<br>";
} else {
    echo "Numri është në format të gabuar<br>";
}
?>
