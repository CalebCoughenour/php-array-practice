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

  // $sql = "SELECT * FROM data";
  // $result = mysqli_query($conn, $sql);
  // $dataSet = array();

  // if(mysqli_num_rows($result) > 0) {
  //   while($row = mysqli_fetch_assoc($result)) {
  //     $dataSet[] = $row;
  //   }
  // }

  // // print_r($dataSet);

  // foreach ($dataSet as $data) {
  //   echo $data["text"]." ";
  // }

  // foreach ($dataSet[0] as $data) {
  //   echo $data." ";
  // }


  // Indexed arrays
  // $data = array("Caleb", "Belac", "Coughenour");
  // echo $data[0];

  // Associative arrays
  // $data = array("first" => "Caleb", "last" => "Belac", "age" => 30);

  // Multi-dimensional arrays
  // $data = array(array("Caleb", "Coughenour"), "Belac", "Coke");

    // PRACTICE: Associative arrays
    // $data = array(
    //   "first" => "Caleb",
    //   "last" => "Coughenour",
    //   "age" => 25);

    // $data["first"] = "Caleb";
    // $data["last"] = "Coughenour";
    // $data["age"] = 25;
    // echo $data["first"]. " " .$data["last"]. " " .$data["age"];

    //PRACTICE: Multi-dimensional arrays
      $data = array(array(1,2,3),"Caleb", "Coughenour");
      echo $data[0][0];

  ?>


</body>
</html>