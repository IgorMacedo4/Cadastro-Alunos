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
        <?php
            // Obter o parametro (dado) fornecido pelo link
           $RA = filter_input(INPUT_GET, "ra", FILTER_SANITIZE_STRING);
           // acessar o arquivo banco de dados
           include_once '../Funcoes/BancoDeDados.php';
           // estabelecer uma conexao com BD SQL
           $meuBanco = conexao();
           // montar o comando sql de pesquisa
           $sql = "select * from aluno where ra ='$RA'";
           // executar o comando SQL
           $resultado = $meuBanco->query($sql);
           $aluno = $resultado->fetch(PDO::FETCH_ASSOC);
        ?>
        <h1>Editar Aluno - Cadastro</h1>
        <form action="AtualizaAluno.php" method="get">
            <table>
                <tr>
                    <td>RA</td>                    
                    <td>
                        <input readonly type="text" name="txtRA" value="<?= $aluno['RA'];?>">
                    </td>
                </tr>
                <tr> 
                    <td>Nome</td>                    
                    <td>
                        <input type="text" name="txtnome" 
                               value="<?= $aluno['nome'];?>">
                    </td>
                </tr>
                <tr>         
                    <td>Data Nascimento</td>                    
                    <td>
                        <input type="date" name="txtnascimento" 
                               value="<?= $aluno["nascimento"];?>">
                    </td>
                </tr>
                <tr>         
                    <td>RG</td>                    
                    <td>
                        <input type="text" name="txtrg" value="<?= $aluno['rg'];?>">
                    </td>
                </tr>
                <tr>         
                    <td>CPF</td>                    
                    <td>
                        <input type="text" name="txtcpf" value="<?= $aluno['cpf'];?>">
                    </td>
                </tr>
                <tr>         
                    <td>Sexo</td>                    
                    <td>
                        <input type="text" name="txtsexo" value="<?= $aluno['sexo'];?>">
                    </td>
                </tr>
            </table>
            <input type="submit" value="Salvar"/>
        </form>
    </body>
</html>
