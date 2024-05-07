<?php
// Konfigurasi database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $stmt = $conn->exec("SELECT * FROM meetings WHERE name='%name%'");
    // lookup all hints if query result is not empty
    $hint = "";
    if ($stmt) {
        foreach ($stmt as $row) {
            if ($hint === "") {
                $hint = $row["name"];
            } else {
                $hint .= "," . $row["name"];
            }
        }
    }
    // Output "no suggestion" if no hint was found or output correct values
    echo $hint === "" ? "no suggestion" : $hint;
    $conn = NULL;
} catch (PDOException $e) {
    exit("PDO Error: " . $e->getMessage() . "<br>");
}
?>