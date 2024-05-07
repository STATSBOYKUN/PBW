<!DOCTYPE html>
<html lang="en-GB">

<head>
  <title>PHP 08B</title>
</head>

<body>
  <h1>Hello World</h1>
  <?php
  error_reporting(E_ALL);
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);

  echo "<h2>Types and Type Casting</h2>\n";

  $mode = rand(1, 4);

  if ($mode == 1) {
    $randomVariable = rand();
  } elseif ($mode == 2) {
    $randomVariable = (string) rand();
  } elseif ($mode == 3) {
    $randomVariable = rand() / (rand() + 1);
  } else {
    $randomVariable = (bool) $mode;
  }

  echo "Random scalar: $randomVariable<br>\n";

  if (is_int($randomVariable)) {
    echo "The random scalar is an integer.<br>\n";
  } elseif (is_float($randomVariable)) {
    echo "The random scalar is a float.<br>\n";
  } elseif (is_string($randomVariable)) {
    echo "The random scalar is a string.<br>\n";
  } else {
    echo "I don't know what this is.<br>\n";
  }

  ?>
</body>

</html>