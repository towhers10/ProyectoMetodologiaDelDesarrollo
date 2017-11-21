<?php
$conexion = new mysqli("localhost", "admBicis", "123456", "bicicletas");
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>