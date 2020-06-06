<?php
  include 'dbconnect.php';
  $id= $_POST['txtmatricula'];
  $nome= $_POST['txtnome'];
  $cpf = $_POST['txtcpf'];
  
    //$con = mysqli_connect("localhost","bob","bob","univille");
    $insert = "insert into aluno(nome,cpf) values(?,?);";
    $stmt = mysqli_prepare($con, $insert);
    mysqli_stmt_bind_param($stmt, "ss", $nome, $cpf);
    mysqli_stmt_execute($stmt);
    
    header('Location:'.'index.php');
?>