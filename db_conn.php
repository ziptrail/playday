<?php 

# server name
$sName = "127.0.0.1";

# database name
$db_name = "playday_db";

# user name
$uName = "root";
# password
$pass = "";

try {
    $conn = new PDO("mysql:host=$sName;dbname=$db_name;charset=utf8", 
                    $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  echo "Connection failed : ". $e->getMessage();
}
