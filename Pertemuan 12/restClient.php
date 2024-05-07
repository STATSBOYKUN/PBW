<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://localhost/PBW/Pertemuan 12/php12A_action.php");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$output = curl_exec($ch);
curl_close($ch);
echo $output;
$data = json_decode($output, true);
echo "<br/><br/>";
var_dump($data);

?>