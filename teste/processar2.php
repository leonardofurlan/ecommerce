<?php 

$conn = new PDO("mysql:local=localhost;dbname=estagio","root","");

$stmt = $conn->prepare("INSERT INTO estagiario (nome,sexo) values (:NOME,:SEXO)");

$nome = "abc";

$sexo = "oi";

$stmt->bindParam(":NOME",$nome);
$stmt->bindParam(":SEXO",$sexo);

$stmt->execute();

 ?>