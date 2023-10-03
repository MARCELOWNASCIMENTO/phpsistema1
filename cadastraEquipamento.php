<?php
include_once 'dbsrv.php';
// get the post records
$nome = $_POST['nome'];
$informacoes = $_POST['informacoes'];
$descricao = $_POST['descricao'];

// database insert SQL code
$sql = "INSERT INTO `equipamentos` (`id`,`tbl_equipamento_nome`, `tbl_equipamento_descricao`, `tbl_equipamento_informacoes`) VALUES ('0', '$nome', '$descricao', '$informacoes')";

// insert in database 
$rs = mysqli_query($conn, $sql);

//if($rs)
{
	echo "Registro cadastrado corretamente";
}