<?php
// Konfigurasi database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

  // mengambil nilai input dari form
  $slot = $_POST["slot"];
  $name = $_POST["name"];
  $email = $_POST["email"];

  // Query untuk menyimpan data ke tabel "form"
  $sql = "INSERT INTO meetings (slot, name, email) VALUES ('$slot', '$name', '$email')";
  $stmt = $conn->exec($sql);
  // message with html syntax with timestamp

  // Menutup koneksi ke database
  if ($stmt) {
    $msg = "Data berhasil ditambahkan.";
  } else {
    $msg = "Gagal.";
  }

  $response = array(
    'status' => '201 Created',
    'message' => $msg
  );
  echo json_encode($response);
  $conn = null;

} catch (PDOException $e) {
  echo $sql . $e->getMessage();
}
?>