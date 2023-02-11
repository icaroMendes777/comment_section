<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); 


require('./database.php');

echo 'ok';
/*
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Max-Age: 1000");
header("Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Cache-Control, Pragma, Authorization, Accept, Accept-Encoding");
header("Access-Control-Allow-Methods: PUT, POST, GET, OPTIONS, DELETE");
header('content-type: application/json; charset=utf-8');
*/

$respostaTeste = [
      ['nome'=>'nome',
      'desc'=>'primeiro'],
      ['nome'=>'nome2',
      'desc'=>'segundo']
];


echo json_encode($respostaTeste);




function debug($var1=null)
{
	echo "<pre style='background-color: #eaecee '>";
	print_r($var1);
	echo "</pre>";
}


