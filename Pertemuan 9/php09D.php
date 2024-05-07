<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  $db_hostname = "localhost";
  $db_database = "form"; // Write your own db name here 
  $db_username = "root"; // Write your own username here 
  $db_password = ""; // Write your own password here
  
  // For the best practice, don’t use your “real” password when submitting your work
  $db_charset = "utf8mb4"; // Optional 
  $dsn =
    "mysql:host=$db_hostname;dbname=$db_database;charset=$db_charset";
  $opt = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false
  );
  try {
    $pdo = new PDO($dsn, $db_username, $db_password, $opt);
    echo "<h2>Data in meeting table (While loop)</h2>\n";
    $stmt = $pdo->query("SELECT * FROM meetings ORDER BY slot");
    echo "Rows retrieved: " . $stmt->rowCount() . "<br><br>\n";
    while ($row = $stmt->fetch()) {
      echo "Slot: ", $row["slot"], "<br>\n";
      echo "Name: ", $row["name"], "<br>\n";
      echo "Email: ", $row["email"], "<br><br>\n";
    }
    echo "<h2>Data in meeting table (Foreach loop)</h2>\n";
    $stmt = $pdo->query("SELECT * FROM meetings ORDER BY slot");
    foreach ($stmt as $row) {
      echo "Slot: ", $row["slot"], "<br>\n";
      echo "Name: ", $row["name"], "<br>\n";
      echo "Email: ", $row["email"], "<br><br>\n";
    }
    $pdo = NULL;
  } catch (PDOException $e) {
    exit("PDO Error: " . $e->getMessage() . "<br>");
  }  
  ?>
</body>

</html>