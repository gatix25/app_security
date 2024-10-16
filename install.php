<?php

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "my_db"; 

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Připojení selhalo: " . $conn->connect_error);
}

$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    echo "DB byla úspěšně vytvořena.<br>";
} else {
    echo "Chyba při vytváření DB: " . $conn->error . "<br>";
}

$conn->select_db($dbname);

$sqlScript = file_get_contents(__DIR__ . '/my_db.sql');

$queries = explode(";", $sqlScript);
foreach ($queries as $query) {
    if (trim($query)) {
        if ($conn->query($query) === FALSE) {
            echo "Chyba při vykonávání dotazu: " . $conn->error . "<br>";
        }
    }
}

echo "DB byla úspěšně nainstalována.<br>";

$conn->close();

?>
