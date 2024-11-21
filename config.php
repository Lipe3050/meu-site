<?php

    if(isset($_POST['submit'])) {
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $smartwatch = $_POST['smartwatch'];
        $fones = $_POST['fones'];
        $celulares = $_POST['celulares'];

        $host = 'localhost';
        $banco = 'login-e-compra-teste';
        $user = 'root';
        $senha_user = '';

        $con = mysqli_connect($host,$banco,$user,$senha_user);

        if(!$con) {
            die("conexão falhou." . mysqli_connect_error());
        }

        $sql = "INSERT INTO Clientes(nome, senha, smartwatch, fones, celulares) VALUES ('$nome','$senha', '$smartwatch', '$fones', '$celulares')";
    }

    $rs = mysqli_query($con, $sql);

    if($rs){
        echo "Você foi cadastrado com sucesso.";
    }

?>