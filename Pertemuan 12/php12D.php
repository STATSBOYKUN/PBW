<?php
// Konfigurasi database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

  // mengambil nilai input dari form
  parse_str(file_get_contents("php://input"), $_DELETE);
  $slot = $_DELETE['slot'];

  // Query untuk menyimpan data ke tabel "form"
  $sql = "DELETE FROM meetings WHERE slot = '$slot'";
  $stmt = $conn->exec($sql);

  if ($stmt) {
    $msg = "Data berhasil dihapus.";
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