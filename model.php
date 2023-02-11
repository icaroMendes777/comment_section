<?php

function getAllUsers()
{
   
		$conexao = $GLOBALS['conn'];
		$sql = "SELECT * FROM comment_tb";
		$result = $conexao->query($sql);
    //debug($result);

    $data = [];
		if ($result->num_rows > 0) {
		  // output data of each row
		  while($row = $result->fetch_assoc()) {
      $data[] = $row;
			//echo "id: " . $row["id"]. " - nome: " . $row["name"]. ": " . $row["description"]. "<br>";
		  }
		} else {
		  //echo "0 results";
		}

    return(json_encode($data));
}


function getAllComments()
{
   
		$conexao = $GLOBALS['conn'];
		$sql = "SELECT * FROM comment_tb";
		$result = $conexao->query($sql);
    //debug($result);

    $data = [];
		if ($result->num_rows > 0) {
		  // output data of each row
		  while($row = $result->fetch_assoc()) {
     		 $data[] = $row;
			//echo "id: " . $row["id"]. " - nome: " . $row["name"]. ": " . $row["description"]. "<br>";
		  }
		} else {
		  //echo "0 results";
		}

    return($data);
}


function getApprovedComments()
{
   
		$conexao = $GLOBALS['conn'];
		$sql = "SELECT * FROM `comment_tb` WHERE `approved`=1";
		$result = $conexao->query($sql);
    //debug($result);

    $data = [];
		if ($result->num_rows > 0) {
		  // output data of each row
		  while($row = $result->fetch_assoc()) {
     		 $data[] = $row;
			//echo "id: " . $row["id"]. " - nome: " . $row["name"]. ": " . $row["description"]. "<br>";
		  }
		} else {
		  //echo "0 results";
		}

    return($data);
}

function getNumCommentsByIpEver($ip)
{
	$conexao = $GLOBALS['conn'];
		$sql = "SELECT * FROM `comment_tb` WHERE `ip`='".$ip."'";
		//debug($sql);
		$result = $conexao->query($sql);
		$rowcount = mysqli_num_rows( $result );
		return($rowcount);
}

function getNumCommentsByIp($ip)
{
	$conexao = $GLOBALS['conn'];
		$sql = "SELECT * FROM `comment_tb` WHERE `ip`='".$ip."' AND `deleted`=0";
		//debug($sql);
		$result = $conexao->query($sql);
		$rowcount = mysqli_num_rows( $result );
		return($rowcount);
}

function getCommentsByIp($ip)
{
	$conexao = $GLOBALS['conn'];
		$sql = "SELECT * FROM `comment_tb` WHERE `ip`='".$ip."' AND `deleted`=0";
		$result = $conexao->query($sql);
    //debug($result);

    $data = [];
		if ($result->num_rows > 0) {
		  // output data of each row
		  while($row = $result->fetch_assoc()) {
     		 $data[] = $row;
			//echo "id: " . $row["id"]. " - nome: " . $row["name"]. ": " . $row["description"]. "<br>";
		  }
		} else {
		  //echo "0 results";
		}

    return($data);
}

function getNumComments()
{
	$conexao = $GLOBALS['conn'];
		$sql = "SELECT * FROM `comment_tb` ";
		//debug($sql);
		$result = $conexao->query($sql);
		$rowcount = mysqli_num_rows( $result );
		return($rowcount);
}


function insertComment($data)
{
		$conexao = $GLOBALS['conn'];
		
		$sql = "INSERT INTO `comment_tb` (`name`,`email`, `description`,`ip`,`approved`) 
				VALUES ( '".$data['name']."', '".$data['email']."', '".$data['comment']."', '".$data['ip']."', '0');";
		
		$result = $conexao->query($sql);
		
		if ($result) return ($conexao->insert_id);
		 
		return null;		
}


function deleteComment($id)
{
	$sql = "UPDATE `comment_tb` SET `deleted`=1 WHERE id='" . $id. "' AND ip='".$_SERVER['REMOTE_ADDR']."'";
	if (mysqli_query($GLOBALS['conn'], $sql)) {
		alert("Comentário deletado");
	} else {
		alert("Houve um problema na operação");
	}
}

