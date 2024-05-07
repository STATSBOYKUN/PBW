<!DOCTYPE html>
<html lang='en-GB'>

<head>
  <title>PHP 08E</title>
  <META name="description" content="php08E.php">
</head>

<body>
  <h1>Variable-length Argument Lists</h1>
  <?php
  function reduceOp(...$parms) {
    $operator_array = $parms[count($parms) - 1];

    if (isset($operator_array['operator'])) {
      $operator = $operator_array['operator'];
    } else {
      $operator = null;
    }
    
    foreach ($parms as $parm) {
      if (is_integer($parm)) {
        if (!is_array($operator_array)) {
          throw new Exception("TypeError");
        } elseif (in_array($operator, ['/'])) {
          throw new Exception("ValueError");
        }
      }
    }

    $number = array_shift($parms);
    if (!is_integer($number)) {
      return "NULL";
    }

    foreach ($parms as $parm) {
      if (!is_array($parm)) {
        switch ($operator) {
          case '+':
            $number = $number + $parm;
            break;
          case '-':
            $number = $number - $parm;
            break;
          case '*':
            $number = $number * $parm;
            break;
          default:
            break;
        }
      }
    }
    return $number;
  }

  try {
    echo "1: ", reduceOp(2, 3), "<br>\n"; # throws an exception 
  } catch (Exception $e) {
    echo "1: Exception ", $e->getMessage(), "<br>\n"; # 'TypeError' 
  }
  try {
    echo "2: ", reduceOp(2, 3, array('op' => '/')), # throws an exception
      "<br>\n";
  } catch (Exception $e) {
    echo "2: Exception ", $e->getMessage(), "<br>\n"; # 'ValueError' 
  }

  echo "3: ", reduceOp(array('op' => '+')), # should return NULL 
    "<br>\n";
  echo "4: ", reduceOp(2, array('op' => '*')), # should return 2 
    "<br>\n";
  echo "5: ", reduceOp(2, 3, 5, array('op' => '+')), # should return 10 
    "<br>\n";
  echo "6: ", reduceOp(2, 3, 5, 7, array('op' => '*')), # should return 210
    "<br>\n";
  echo "7: ", reduceOp(2, 3, 5, 7, 11, array('op' => '-')), # should return - 24
    "<br>\n";
  ?>
</body>

</html>