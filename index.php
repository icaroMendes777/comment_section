<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); 

session_start();


///carrega as funcionalidades back end
require('./util.php');
require('./database.php');
require('./model.php');


///se o usuário tiver enviado um post

$_REFUSED_DATA = [];


if($_POST) validatePost();

if($_GET){
    if($_GET['deleteId']) deleteComment($_GET['deleteId']);
    echo "<script>window.location = location.protocol + '//' + location.host + location.pathname;</script>";
}



$numCommentsIp = getNumCommentsByIpEver($_SERVER['REMOTE_ADDR']);

//se é a primeira vez que o usuário entra no sistema
//um comentário exemplo é inserido em nome dele

if ( $numCommentsIp == 0) {

    $dummy = ['name'=>'John Doe',
    'email'=>'simple@test.com',
    'comment'=>'Este é um comentário exemplo para testes.<br/>Loren Ipsum Dolor Sit Amed!',
    'ip'=>$_SERVER['REMOTE_ADDR'],];

    insertComment($dummy);

}


///pega a lista de comentários do usuário
$comments = getCommentsByIp($_SERVER['REMOTE_ADDR']);


///chama as views

require('./form.php');
require('./comments.php');



/**
 * ==========================================
 * END!
 */

