<?php
   
       
    $matricula = filter_input(INPUT_POST, 'txtmatricula', FILTER_SANITIZE_NUMBER_INT);
    $nome = filter_input(INPUT_POST, 'txtnome', FILTER_SANITIZE_STRING);
    $cpf = filter_input(INPUT_POST, 'txtcpf',FILTER_SANITIZE_STRING);
    
    include 'dbconnect.php';
//  $con = mysqli_connect("localhost","bob","bob","univille");
    $insert = "update aluno set nome = '$nome', cpf = '$cpf' where matricula = '$matricula'";
    $stmt = mysqli_prepare($con, $insert);
    mysqli_stmt_bind_param($stmt, "ss", $nome, $cpf);
    mysqli_stmt_execute($stmt);
    
    header('Location:'.'index.php');
?>