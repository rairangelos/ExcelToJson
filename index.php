<?php 
 
$username ="root";
$password = "";

try {

  	$conn = new PDO('mysql:host=127.0.0.1;dbname=rair', $username, $password);
  	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {

    echo 'ERROR: ' . $e->getMessage();

}


$stmt=$conn->prepare('select * from tb_escolas'); 
$stmt->execute();
$i = 1;

foreach ($stmt as $key => $value) {
	$mainNode = array($i => array(
		'inep' 			 => 		$value['inep'], 
		'gre'			 => 		$value['gre'], 
		'escola' 		 => 		$value['escola']
	));
	$mainFile = array($mainNode);
	$file_json = json_encode($mainFile);
	print($file_json);
	$i++;
 }
 
 ?>