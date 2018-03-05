<?php 

$conn = new PDO("mysql:host=localhost;dbname=estagio","root","");

$stmt = $conn->prepare("INSERT into estagiario (nome,sexo) values (:NOME,:SEXO)");

if(isset($_POST)){

	$nome = $_POST['nome'];
	$sexo = $_POST['sexo'];

} else{
	
	$nome = 'Leonardo';
	$sexo = 'm';

}



$stmt->bindParam(':NOME', $nome);
$stmt->bindParam(':SEXO', $sexo);

$stmt->execute();

 ?>