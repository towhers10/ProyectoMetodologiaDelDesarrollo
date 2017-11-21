<?php

$usuario = $_POST['nnombre'];
$pass = $_POST['npassword'];
$passw = $_POST['npassword2'];

if(empty($usuario) || empty($pass) || empty($passw)){
	echo '<script language="javascript">alert("Debe llenar todos los campos.");</script>';
}else{

if($pass == $passw){
	$conexion = new mysqli("localhost", "admBicis", "123456", "login");
	if (mysqli_connect_errno()) {
    	printf("Connect failed: %s\n", mysqli_connect_error());
    	exit();
	} 

	$query="INSERT INTO usuario (user, password) VALUES('" . $usuario . "', '" . $pass . "')";
	$resultados=mysqli_query($conexion,$query);
	echo '<script language="javascript">alert("Usuario registrado exitosamente.");</script>';
	header("Location: index.php?registro=1");
}else{
	header("Location: registro.php?contraseña=1");
}}
?>

