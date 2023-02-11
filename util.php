<?php


function validatePost()
{

    /*
    === Primeiro valida se o usuário está enviando requests demais
        ou se o banco está cheio muito rápido
        o que pode ser um ataque
    */
    $numCommentsIp = getNumCommentsByIpEver($_SERVER['REMOTE_ADDR']);
   // debug($numCommentsIp);


    if( $numCommentsIp > 100 ) {
        echo '<script>alert("If You are testing this aplication, please be aware that there is a limit of posts of 200 to be sent")</script>';

    }
    
    if( $numCommentsIp > 200 ) {
        echo '<script>alert("Limit of posts reached")</script>';
        return;
    }
    $numComments = getNumComments();
    
   // echo '-';
   // debug($numComments);

    if($numComments > 5000 ) {
        echo '<script>alert("We have been receiving an excessive number of comments\n
                We may be under attack! Please try again later.\n   
                Thank You.")</script>';
        return;
    }


    //se não falhou em nenhum teste de segurança recebe o comentário
    receiveComment();
}

function receiveComment()
{
   
    ///essa string vem por default no editor de texto, significa campo não preenchido
    if($_POST['comment']=='<p>&nbsp;</p>') $_POST['comment']='';

    if( !$_POST['name'] || !$_POST['email'] || !$_POST['comment'] ){
        echo '<script>alert("Please Enter All the form Fields")</script>';
        $GLOBALS['_REFUSED_DATA'] = $_POST;
        return;
    }


    $insert = ['name'=>$_POST['name'],
            'email'=>$_POST['email'],
            'comment'=>$_POST['comment'],
            'ip'=>$_SERVER['REMOTE_ADDR'],];

    if(insertComment($insert)){
        alert('Comentário enviado');
        echo '<script>window.location = window.location.href;</script>';
        
        return;
    }
}


function debug($var=null, $pre=null)
{   
	echo "<p><pre style='background-color: #eaecee '>".$pre;
	print_r($var);
	echo "</p></pre>";
}

function alert($text)
{
    echo '<script>alert("'.$text.'")</script>';
}

function formatTimeYM($time)
{
    $split1 = explode(" ", $time);
    $split2 = explode("-", $split1[0]);
    
    return $split2[2].'/'.$split2[0];
}
