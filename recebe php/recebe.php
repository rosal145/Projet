<?php

require_once("conec/conexao.php");

$nome = $_POST['nome'];
$cep = $_POST['cep'];
$logradouro = $_POST['logradouro'];
$complemento = $_POST['complemento'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$uf = $_POST['uf'];
$cidade = $_POST['cidade'];
$data = $_POST['data'];

$sql = "INSERT INTO `projeto` (`nome`, `cep`, `logradouro`, `complemento`, `numero`, `bairro`, `uf`, `cidade`, `data`) VALUES ('$nome','$cep','$logradouro','$complemento','$numero', '$bairro','$uf','$cidade','$data')";

if(!$sql) {
    echo("Ocorreu um erro durante a inserção de dados na tabela");
} else  {
    echo("Dados inseridos com sucesso"); 
}


?>