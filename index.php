<?php
  include_once 'dbh.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>PHP Array Practice</title>
</head>
<body>

  <?php 

  $sql = "SELECT * FROM data";
  $result = mysqli_query($conn, $sql);
  $dataSet = array();

  if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      $dataSet[] = $row;
    }
  }

  // print_r($dataSet);

  foreach ($dataSet as $data) {
    echo $data["text"]." ";
  }

  foreach ($dataSet[0] as $data) {
    echo $data." ";
  }

  ?>


</body>
</html>