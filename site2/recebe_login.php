<?php

//inicia sessão do usuário
session_start();
header('Content-Type: text/html; charset=utf-8');

$login = $_POST['login'];
$senha = sha1($_POST['senha']);

//echo "Bem vindo " . $login;
//echo "</br>";
//echo "Senha digitada: " . $senha;


// Conexão com o banco de dados
$conexao = new PDO("mysql:host=localhost; dbname=capoeira; charset=utf8", "root", "");

// Prepara a consulta
$consulta = $conexao->prepare("SELECT * FROM usuarios WHERE login = ? AND senha = ? ");

// Envia para o banco de dados
$consulta->execute(array($login,$senha));

// Captura o restultado da consulta
$resultado = $consulta->fetchAll();

//echo "<pre>";
//print_r($resultado);

if($resultado) {
	$_SESSION ['login'] = $login;
	echo "<h1>Você está autenticado</h1>";
	header("Location: videos.php");
} else {
	echo "<h1>Login ou senha incorretos</h1>";
}