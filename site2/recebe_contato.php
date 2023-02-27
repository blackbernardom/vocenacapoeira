
<?php
session_start();
header('Content-Type: text/html; charset=utf-8');

$nome = $_POST['nome'];
$fone = $_POST['fone'];
$email = $_POST['email'];
$comentario = $_POST['comentario'];

$conexao = new PDO("mysql:host=localhost; dbname=capoeira; charset=utf8", "root", "");

$iserir_dados = $conexao->prepare(" INSERT INTO contato (nome,fone,email,comentario) VALUES (?,?,?,?)");


// Envia para o banco de dados
$iserir_dados->execute(array($nome,$fone,$email,$comentario));

// Captura o restultado da consulta
$resultado = $iserir_dados->rowCount();

if($resultado == 0) {
	echo "erro na inserção da informação.";
}else {
	header("Location: index.html");
	echo "Dados enviados com sucesso!!!";
}
