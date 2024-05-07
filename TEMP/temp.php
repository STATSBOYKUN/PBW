<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <!-- connection -->
  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "form";

  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    echo "Success connect ngab<br>";
  } catch (PDOException $e) {
    echo $sql . $e->getMessage();
  }
  ?>

  <!-- example of form-->
  <form action="temp.php" method="post">
    <label for="nama">Nama</label>
    <input type="text" name="nama" id="nama">
    <br>
    <label for="kelas">kelas</label>
    <input type="text" name="kelas" id="kelas">
    <br>
    <button type="submit" name="submit">Kirim</button>
  </form>

  <!-- push to database -->
  <?php
  try {
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];

    $sql = "
      INSERT INTO student (name, kelas)
      VALUES ('$nama', '$kelas')";

    $conn->exec($sql);
    echo "Success masuk database ngab";
  } catch (PDOException $e) {
    echo $sql . $e->getMessage();
  }

  $conn = null;
  echo "<br>Koneksi diputus";
  ?>
</body>

</html>