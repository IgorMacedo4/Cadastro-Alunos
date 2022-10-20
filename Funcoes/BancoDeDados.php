<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
// criar uma conexao com o BD MySQL

function conexao(){
    $user = "root";
    $senha = "";
    $dsn = "mysql:host=localhost;dbname=escola"; 
    // comando que abre uma conexao com o BD
    $conn = new PDO($dsn, $user, $senha);
    $conn->setAttribute(PDO::ATTR_ERRMODE,
                        PDO::ERRMODE_EXCEPTION);
    return $conn;
    
}
