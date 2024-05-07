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
  echo 'Item: ', $_REQUEST['item'], '<br>';
  echo 'Address: ', $_REQUEST['address'], '<br>'; 
  ?>

  <form action="php09A.php" method="post">
    <input type="submit" value="Back">
  </form>
</body>
</html>