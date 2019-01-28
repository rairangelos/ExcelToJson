# ExcelToJson
_____________________________________________________________________
#This part of the script is responsible for the database connection

$username ="root";
$password = "";
try {

  	$conn = new PDO('mysql:host=127.0.0.1;dbname=daname', $username, $password);
  	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {

    echo 'ERROR: ' . $e->getMessage();

}
______________________________________________________________________
#Part of the script that makes the nodes of the json file

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
