<?php
  $id= $_POST['txtId'];
  $nome= $_POST['txtnome'];
  $cpf = $_POST['txtcpf'];
  
    $con = mysqli_connect("localhost","bob","bob","univille");
    $insert = "insert into cliente(nome,endereco) values(?,?);";
    $stmt = mysqli_prepare($con, $insert);
    mysqli_stmt_bind_param($stmt, "ss", $nome, $endereco);
    mysqli_stmt_execute($stmt);
    
    header('Location:'.'index.php');
?>