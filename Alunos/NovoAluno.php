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
        <h1>Novo Aluno - Cadastro</h1>
        <form action="InsereAluno.php" method="get" >
            <table>
                <tr>
                    <td>RA</td>                    
                    <td>
                        <input type="text" name="txtRA" value="">
                    </td>
                </tr>
                <tr> 
                    <td>Nome</td>                    
                    <td>
                        <input type="text" name="txtnome" value="">
                    </td>
                </tr>
                <tr>         
                    <td>Data Nascimento</td>                    
                    <td>
                        <input type="date" name="txtnascimento" value="">
                    </td>
                </tr>
                <tr>         
                    <td>RG</td>                    
                    <td>
                        <input type="text" name="txtrg" value="">
                    </td>
                </tr>
                <tr>         
                    <td>CPF</td>                    
                    <td>
                        <input type="text" name="txtcpf" value="">
                    </td>
                </tr>
                <tr>         
                    <td>Sexo</td>                    
                    <td>
                        <input type="text" name="txtsexo" value="">
                    </td>
                </tr>
            </table>
            <input type="submit" value="Salvar"/>
        </form>
    </body>
</html>

