<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <a href="NovoAluno.php">Novo Aluno</a>
        <table border="1">
            <tr>
                <th>Ra</th>
                <th>Nome</th>
                <th>Ação</th>
            </tr>
                <?php
                // acessar o arquivo de BancoDeDados
                include_once '../Funcoes/BancoDeDados.php';
                // pedir uma conexao para o BD MySQL
                $meuBanco = conexao();

                // criar um comando SQL para exibir todos os alunos

                $sql = "select * from aluno";

                // enviar o comando para o Banco de dados
                // receber o resultado da consulta

                $resultado = $meuBanco->query($sql);
                while ($linha = $resultado->fetch(PDO::FETCH_ASSOC)){
                    $RA = $linha["RA"];
                    echo "<tr>";
                    echo     "<td>";
                    echo        $linha["RA"];
                    echo     "</td>";
                    echo     "<td>";
                    echo         $linha["nome"];
                    echo     "</td>";
                    echo     "<td>";
                    echo     "<a href='EditarAluno.php?ra=$RA'>Editar</a>";
                    echo     "</td>";
                    echo "</tr>";
                }
                $meuBanco = null;
                
                ?>
        </table>
    </body>
</html>
