<?php 
$Server = "localhost";
$User = "root";
$Password = "";
$Bd= "gorras";
$Conection = mysqli_connect($Server, $User, $Password, $Bd);
if($Conection->connect_errno){
    die('Error al conectar la Base de Datos' .$Conection->connect_errno);
}
?>