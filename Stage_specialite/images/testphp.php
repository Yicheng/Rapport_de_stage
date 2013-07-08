<?php
$con = mysql_connect("localhost","windeopl","mtw2011+DB");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("windeopl_main", $con);
  echo "ddddddddddd";
$result = mysql_query("SELECT * FROM wp_fm_data_7");

while($row = mysql_fetch_array($result))
  {
  echo $row['Nom'];
  echo "<br />";
  }

mysql_close($con);
?>
