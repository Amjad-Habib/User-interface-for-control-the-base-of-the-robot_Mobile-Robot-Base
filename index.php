<?php

  //set connection variables 
  $db_host = 'localhost';
  $db_user = 'root';
  $db_password = 'Amjad1419';
  $db_db = 'smart_methods';

  //connection to server & database 
  $connection = mysqli_connect($db_host, $db_user, $db_password, $db_db );

  //check connection 
  if(mysqli_connect_errno()):
    printf("Connect failed: %s\n", mysqli_connect_errno());
    exit();
  endif;


$M1 = ( isset($_POST['M1']) == TRUE ) ? $_POST['M1'] :  '';
$M2 = ( isset($_POST['M2']) == TRUE ) ? $_POST['M2'] :  '';
$M3 = ( isset($_POST['M3']) == TRUE ) ? $_POST['M3'] :  '';
$M4 = ( isset($_POST['M4']) == TRUE ) ? $_POST['M4'] :  '';
$M5 = ( isset($_POST['M5']) == TRUE ) ? $_POST['M5'] :  '';
$M6 = ( isset($_POST['M6']) == TRUE ) ? $_POST['M6'] :  '';



if(isset($_POST['save'])){

    echo "<br>";

    $my_query = "";

    $my_query = "select * from motors WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO motors (M1, M2, M3, M4, M5, M6) VALUES ('$M1', '$M2', '$M3', '$M4', '$M5', $M6)";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added";
    }
    else{
        echo "Error: Unable to past <br>";
    }

}else if(isset($_POST['on'])) {
    echo "<br>";

    $my_query = "";

    $my_query = "select * from Operatingtable WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO Operatingtable (isOn) VALUES (1)";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added";
    }
    else{
        echo "Error: Unable to past <br>";
    }

}else if(isset($_POST['off'])) {
    echo "<br>";

    $my_query = "";

    $my_query = "select * from OperatingTable WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO OperatingTable (isOff) VALUES (0)";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added";
    }
    else{
        echo "Error: Unable to past <br>";
    }
}


if(isset($_POST['forward'])){

    $my_query = "select * from Directions WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO Directions (Forward) VALUES ('Forward')";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added";
    }
    else{
        echo "Error: Unable to past2 <br>";
    }


}else if(isset($_POST['right'])){

    $my_query = "select * from Directions WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO Directions (Right) VALUES ('right')";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added";
    }
    else{
        echo "Error: Unable to past <br>";
    }


}else if(isset($_POST['left'])){

    $my_query = "select * from Directions WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO Directions (Left) VALUES ('left')";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added";
    }
    else{
        echo "Error: Unable to past <br>";
    }


}else if(isset($_POST['stop'])){

    $my_query = "select * from Directions WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO Directions (Stop) VALUES ('stop')";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added";
    }
    else{
        echo "Error: Unable to past <br>";
    }


}else if(isset($_POST['backward'])){

    $my_query = "select * from Directions WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO Directions (Backward) VALUES ('backward')";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added";
    }
    else{
        echo "Error: Unable to past <br>";
    }
}


?>