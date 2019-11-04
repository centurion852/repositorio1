<?php
	include("conexaobanco.php");
	
	$nome=$_POST['nome'];
    $email=$_POST['email'];
    $senha=$_POST['senha'];
	
	$sql="INSERT INTO cadastro (nome, email, senha)
        VALUES ('$nome', '$email', '$senha')";
    if(mysqli_query($conexao, $sql)){
        echo "<h1> Você foi cadastrado </h1>";
        echo "<a href='cadastro.html'> Página inicial </a>";
    }
    else{
        echo "Error: ".$sql."<br>".mysqli_error($conexao);
    }
    mysqli_close($conexao);
	
?>