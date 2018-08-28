<?php

$codigo = $_POST["codigo"];
$nombre = $_POST["nombre"];
$apeliido = $_POST["apellido"];
$telefono = $_POST["telefono"];
$email = $_POST["email"];
$genero = $_POST["genero"];
$edad = $_POST["edad"];

if($codigo === "" || $nombre===""$apellido === "" || $telefono===""$email === "" || $genero===""$edad === ""){
	echo json_encode("Llena todos los campos")
}else{
	echo json_encode("correcto: <br>codigo:".$codigo." <br>nombre:".$nombre. "<br>apellido:".$apellido." <br>telefono:".$telefono. "<br>email:".$email." <br>genero:".$genero."<br>edad:".$edad);
}
