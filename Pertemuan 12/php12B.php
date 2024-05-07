<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
    }

    h1 {
      text-align: center;
    }

    form {
      max-width: 400px;
      margin: 0 auto;
    }

    label {
      display: block;
      margin-bottom: 5px;
    }

    input[type="number"],
    input[type="text"],
    input[type="email"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      margin-bottom: 10px;
    }

    input[type="submit"] {
      width: 100%;
      padding: 10px;
      background-color: #4CAF50;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>

<body>
  <h1>Form Tambah Data</h1>

  <form method="post" action="php12B_action.php">
    <label for="slot">Slot:</label>
    <input type="number" id="slot" name="slot"><br>
    <label for="name">Name:</label>
    <input type="text" id="name" name="name"><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email"><br><br>
    <input type="submit" value="Submit">
  </form>

</body>

</html>

<?php
// Konfigurasi database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);


  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // mengambil nilai input dari form
    $slot = $_POST["slot"];
    $name = $_POST["name"];
    $email = $_POST["email"];

    // Query untuk menyimpan data ke tabel "form"
    $sql = "INSERT INTO meetings (slot, name, email) VALUES ('$slot', '$name', '$email')";
    $conn->exec($sql);
    // message with html syntax with timestamp
    echo "<p>" . date("Y-m-d h:i:sa") . " - Data sukses masuk ke database</p>";

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
  }

  // Menutup koneksi ke database
  $conn = null;
} catch (PDOException $e) {
  echo $sql . $e->getMessage();
}
?>