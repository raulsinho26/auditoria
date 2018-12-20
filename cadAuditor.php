<?php
include "conexao.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$cidade = $_POST['cidade'];
$logradouro = $_POST['logradouro'];
$telefone= $_POST['telefone'];



$insert = "INSERT INTO cad_usuario (nome, email, cpf, cidade, logradouro, telefone,) VALUES
								   ('$nome','$email','$cpf','$cidade','$logradouro','$telefone')";
									
$result = mysqli_query($conn, $insert) or die ("Falha na execução da consulta para inserir registro");
?>