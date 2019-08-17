<?php
    include_once "helpers/helper_functions.php";
    $database = new PDO("mysql:host=localhost;charset=utf8;dbname=gerenciamentofaltas", "root", "password");
    $database->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    
    $sql    = "SELECT * FROM aluno";
    
    $select = $database->prepare($sql);
    
    $result = $select->execute(); //retorna verdadeiro ou falso;

    if (!$result) {
        echo "Ocorreu um erro";
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
    <title>Document</title>
    <style>
        table{
            width: 600px;
            margin: 0 auto;
        }
        table, th, td, tr{
            border: 2px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Código do aluno</th>
            <th>Nome do aluno</th>
        </tr>
        <?php foreach($student_rows as $student): ?>
            <tr>
                <td ><?= $student->id_aluno ?></td>
                <td><?= $student->nome_completo ?></td>
                
            </tr>
        <?php endforeach ?>
    </table>
</body>
</html>