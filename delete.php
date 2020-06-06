<?php

$matricula = filter_input(INPUT_GET, 'matricula', FILTER_SANITIZE_NUMBER_INT);

    include 'dbconnect.php';
   // $con = mysqli_connect("localhost","bob","bob","univille");
    $insert = "delete from aluno where matricula = '$matricula'";
    $stmt = mysqli_prepare($con, $insert);
    mysqli_stmt_bind_param($stmt, "ss", $nome, $cpf);
    mysqli_stmt_execute($stmt);
    
    header('Location:'.'index.php');

?>