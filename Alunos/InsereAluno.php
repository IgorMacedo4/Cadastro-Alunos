<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

// recuperar os parametros (dados) fornecidos pelo formulario

$RA = filter_input(INPUT_GET, "txtRA", FILTER_SANITIZE_STRING);
$nome = filter_input(INPUT_GET, "txtnome", FILTER_SANITIZE_STRING);
$nascimento = filter_input(INPUT_GET, "txtnascimento", FILTER_SANITIZE_STRING);
$rg = filter_input(INPUT_GET, "txtrg", FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_GET, "txtcpf", FILTER_SANITIZE_STRING);
$sexo = filter_input(INPUT_GET, "txtsexo", FILTER_SANITIZE_STRING);; 
        

// acessar o arquivo de banco de dados para
// obter a funcao conexao

include_once '../Funcoes/BancoDeDados.php';

// Estabelecer uma conexao com o BD

$meuBanco = conexao();

// criar o comando de inserção do sql

$sql = "insert into aluno (ra,nome,nascimento,rg,cpf,sexo)"
       ." values ('$RA','$nome','$nascimento','$rg','$cpf','$sexo')";

// pedir a execuçao do SQL pelo BD

$meuBanco->exec($sql);

// redirecionar para outra página

header("location:Listar.php");

