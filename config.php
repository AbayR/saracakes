<?php
$data = array(
    array()
); //database creditials
$names=array(
    'server',
    'username',
    'password',
    'name'
);
$data[0][0]="localhost";
$data[0][1]="root";
$data[0][2]="";
$data[0][3]="saracakes";
for($column=0;$column<1;$column++){
    for ($row=0;$row<4;$row++){
        define($names[$row],$data[$column][$row]);
    }
}
/* Attempt to connect to MySQL database */
$link = mysqli_connect(server, username, password, name);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>	

