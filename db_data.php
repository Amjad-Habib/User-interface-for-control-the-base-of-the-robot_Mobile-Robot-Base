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

$sql = mysqli_query($connection, "SELECT * FROM motors ORDER BY id DESC LIMIT 1");

$print_data = mysqli_fetch_row($sql);

$sql2 = mysqli_query($connection, "SELECT * FROM operatingtable ORDER BY id DESC LIMIT 1");

$print_data2 = mysqli_fetch_row($sql2);

$sql3 = mysqli_query($connection, "SELECT * FROM operatingtable ORDER BY id DESC LIMIT 1");

$print_data3 = mysqli_fetch_row($sql3);

$sql4 = mysqli_query($connection, "SELECT * FROM Directions ORDER BY id DESC LIMIT 1");

$print_data4 = mysqli_fetch_row($sql4);



echo "SAVED BUTTON";
echo "<hr>";
echo "id = ".$print_data[0];
echo "<br>";
echo "Motor1 =  ".$print_data[1];
echo "<br>";
echo "Motor2 =  ".$print_data[2];
echo "<br>";
echo "Motor3 =  ".$print_data[3];
echo "<br>";
echo "Motor4 =  ".$print_data[4];
echo "<br>";
echo "Motor5 =  ".$print_data[5];
echo "<br>";
echo "Motor6 =  ".$print_data[6];
echo "<br>";
echo "<br>";
echo "<br>";



echo "OPERATING BUTTONS";
echo "<hr>";
echo "id =  ".$print_data2[0];
echo "<br>";
echo "On =  ".$print_data2[1];
echo "<br>";
echo "Off =  ".$print_data3[1];
echo "<br>";
echo "<br>";
echo "<br>";



echo "DIRECTION BUTTONS";
echo "<hr>";
echo "id = ".$print_data3[0];
echo "<br>";
echo "The Direction is ";
if($print_data4[1]){
    echo $print_data4[1];
}else if($print_data4[2]){
    echo $print_data4[2];
}else if($print_data4[3]){
    echo $print_data4[3];
}else if($print_data4[4]){
    echo $print_data4[4];
}else if($print_data4[5]){
    echo $print_data4[5];
}






?>
