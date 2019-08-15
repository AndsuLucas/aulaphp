<?php
include_once "helpers.php";
include_once "connect.php";

$sql = "SELECT * FROM falta";

$select = $connection->prepare($sql);

$result_select = $select->execute();
dieDump($result_select);

if (!$result_select) {
    echo "Ocorreu algum erro";
    exit(); 
}

$student_rows = $select->fetchAll();


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gerenciamento de faltas</title>
    <style>
        table, th, td, tr {
            border: 1px solid black;
            border-collapse: collapse;
        }
        table{
            width: 400px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
   <table>
        <tr>
            <th>Código do aluno</th>
            <th>Nome Completo</th>
        </tr>
        <?php foreach($student_rows as $student): ?>
            <tr>
                <td><?= $student->idAluno ?></td>
                <td><?= $student->nomeCompleto ?></td>
                
            </tr>
        <?php endforeach ?>
   </table>
    
</body>
</html>