<?php
// Konfigurasi database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    $keyword = $_GET['keyword'];
    $sql = "SELECT * FROM meetings WHERE name LIKE '%$keyword%'";

    $result = $conn->query($sql);
    $result->setFetchMode(PDO::FETCH_ASSOC);
    $stmt = $result->fetchAll();

    // lookup all hints if query result is not empty
    $hint = "";
    if ($stmt) {
        echo json_encode($stmt); // lookup all hints if query result is not empty
    } else {
        echo "no suggestion"; // Output "no suggestion" if no hint was found or output correct values
    }

    $conn = NULL;
} catch (PDOException $e) {
    exit("PDO Error: " . $e->getMessage() . "<br>");
}
?>