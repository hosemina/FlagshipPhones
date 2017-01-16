<?php
function zag() {
    header("{$_SERVER['SERVER_PROTOCOL']} 200 OK");
    header('Content-Type: text/html');
    header('Access-Control-Allow-Origin: *');
}
function rest_get($request, $data) { 
	$idbrand = $_GET['idbrand'];

	$veza = new PDO('mysql:host='. getenv('MYSQL_SERVICE_HOST') .';port=3306;dbname=flagshipphones', 'emina', 'emina123');
	$veza->exec("set names utf8");

	$upit = $veza->prepare("SELECT * FROM phones WHERE idbrand=?");
	$upit->bindValue(1, $idbrand, PDO::PARAM_INT);
	$upit->execute();
	$br = $upit->rowCount();

	
		print "{ \"Telefoni\":[ ";
		$i = 1;
        foreach ($upit->fetchAll() as $phone)
        {
            if($i < $br)
                print '"'.$phone["naslov"] . '",';
            else
                print '"'.$phone["naslov"] . '"';
            $i++;
        }
 		print "]}";
}

function rest_post($request, $data) { }
function rest_delete($request) { }
function rest_put($request, $data) { }
function rest_error($request) { }

$method  = $_SERVER['REQUEST_METHOD'];
$request = $_SERVER['REQUEST_URI'];

switch($method) {
    case 'PUT':
        parse_str(file_get_contents('php://input'), $put_vars);
        zag(); $data = $put_vars; rest_put($request, $data); break;
    case 'POST':
        zag(); $data = $_POST; rest_post($request, $data); break;
    case 'GET':
        zag(); $data = $_GET; rest_get($request, $data); break;
    case 'DELETE':
        zag(); rest_delete($request); break;
    default:
        header("{$_SERVER['SERVER_PROTOCOL']} 404 Not Found");
        rest_error($request); break;
}
?>
