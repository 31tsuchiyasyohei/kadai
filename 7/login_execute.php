<?php

session_start();


$_SESSION["name"] = $_POST["name"]; 
$_SESSION["password"] = $_POST["password"]; 
var_dump($_SESSION);
echo "<hr>";
if ($_SESSION["name"] == "admin" and $_SESSION["password"] == "password"){
    echo "yes";
    header("Location: index.php");
}
else{
    echo "no";
    header("Location: login.php");
}
?>