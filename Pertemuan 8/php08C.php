<!DOCTYPE html>
<html>

<head>
  <title>PHP 08C</title>
</head>

<body>
  <h1>Array Operators and Regular Expressions</h1>
  <?php
  echo "<h2>Exercise 2a</h2>\n";
  $planets = array("earth");
  array_unshift($planets, "mercury", "venus");
  array_push($planets, "mars", "jupiter", "saturn");
  echo "(1) \$planets = [", join(", ", $planets), "]<br>\n";
  $last = array_pop($planets);
  echo "(2) \$planets = [", join(", ", $planets), "]<br>\n";
  $first = array_shift($planets);
  echo "(3) \$planets = [", join(", ", $planets), "]<br>\n";
  echo "(4) \$first = $first, \$last = $last<br>\n";

  echo "<h2>Exercise 2c</h2>\n";
  $spheres = $planets;
  echo "(5) \$spheres = [", join(", ", $spheres), "]<br>\n";
  $planets[1] = "midgard";
  echo "(6) \$planets = [", join(", ", $planets), "]<br>\n";
  echo "(6) \$spheres = [", join(", ", $spheres), "]<br>\n";
  $spheres = &$planets;
  echo "(7) \$spheres = [", join(", ", $spheres), "]<br>\n";
  $planets[0] = "friga";
  echo "(8) \$planets = [", join(", ", $planets), "]<br>\n";
  echo "(8) \$spheres = [", join(", ", $spheres), "]<br><br>\n";

  for ($i=1; $i <= 4; $i++) {          
    $removedPlanets = array_shift($planets);   
    echo "Removed : $removedPlanets Remaining : [", join(", ", $planets), "]<br>\n";
  }

  echo "<h2>Exercise 3</h2>\n";
  $names = [
    "Dave Shield",
    "Mr Andy Roxburgh",
    "Dr George Christodoulou",
    "Dr Ullrich Hustadt",
    "Dr David Jackson"
  ];

  foreach ($names as $name)
    echo "(1) Name: $name<br>\n"; 
    
  // Your own code her
  foreach ($names as $name){
    $cek = preg_replace('/(Mr|Dr)\s/', '', $name);
    $name = explode(' ', $name);
    $NAME_LENGTH = count($name);
    echo "(2) Name: " . strtoupper($name[$NAME_LENGTH - 1]) . ", " . $name[$NAME_LENGTH - 2] . "<br>";
  }
  ?>
</body>

</html>