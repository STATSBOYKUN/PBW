<?php
// Konfigurasi database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

  // mengambil nilai input dari form
  parse_str(file_get_contents("php://input"), $_PUT);
  $slot = $_PUT['slot'];
  $name = $_PUT['name'];
  $email = $_PUT['email'];

  // Query untuk menyimpan data ke tabel "form"
  $sql = "UPDATE meetings SET name = '$name', email = '$email' WHERE slot = '$slot'";
  $stmt = $conn->exec($sql);

  // Menutup koneksi ke database
  if ($stmt) {
    $msg = "Data berhasil diubah.";
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