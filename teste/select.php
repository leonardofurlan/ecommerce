<?php 

$conn = new PDO("mysql:host=localhost;dbname=estagio","root","");

$stmt = $conn->prepare("SELECT * FROM estagiario where nome='leonardo' and sexo='f'");

$stmt->execute();

$result = $stmt->fetchAll();

if(count($result)>0){
	echo "achou algo";

}

else{

	echo "não encontrou nada";
}

// $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

// var_dump($result);

// foreach ($result as $row) {
// 	foreach ($row as $key => $value) {
// 		if($key==="id") continue;
// 		echo $key.": ".$value."<br>";
// 	}
// }

 ?>