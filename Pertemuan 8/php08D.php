<!DOCTYPE html>
<html>

<head>
  <title>PHP 08D</title>
</head>

<body>
  <h1>Associative Arrays</h1>
  <?php
  $dict1 = array('a' => 1, 'b' => 2);
  $dict2 = $dict1;
  $dict1['b'] = 4;
  echo "\$dict1['b'] = ", $dict1['b'], "<br>\n";
  echo "\$dict2['b'] = ", $dict2['b'], "<br>\n";

  echo "<br>";
  print("Dictionary :<br>");
  foreach ($dict1 as $key => $value) {
    echo "key => " . $key . " , value => " . $value . "<br>\n";
  }

  $text = 'lorem ipsum elit congue auctor inceptos taciti suscipit tortor auctor integer congue hac nullam hac auctor tellus nullam inceptos nullam integer tellus nullam auctor elit lorem ipsum elit';
  
  $dict3 = [];

  $array = explode(" ", $text);

  foreach ($array as $word) {
    if (!array_key_exists($word, $dict3)) {
      $dict3[$word] = 0;
    }
    $dict3[$word]++;
  }

  arsort($dict3);

  echo "<br>";
  echo "<table style = 'border : 1px solid black;border-collapse:collapse'>";
  echo "<tr>";
  echo "<td style = 'border : 1px solid black;'>Kata</td>";
  echo "<td style = 'border : 1px solid black;'>Jumlah Kemunculan</td>";
  echo "</tr>";

  foreach ($dict3 as $key => $value) {
    echo "<tr>";
    echo "<td style = 'border : 1px solid black;'>" . $key . "</td>";
    echo "<td style = 'border : 1px solid black;text-align:right'>" . $value . "</td>";
    echo "</tr>";
  }
  echo "</table>";
  ?>
</body>

</html>