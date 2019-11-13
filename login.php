<?php
ob_start();


include("conexaobanco.php");
    
           //verificar formulário para autenticação
           $email=$_POST["email"];
           $senha=($_POST["senha"]);
           
           
           $sql="SELECT email FROM cadastro WHERE email='$email' AND senha='$senha'";
           $resultado=mysqli_query($conexao, $sql);
           $linhas=mysqli_affected_rows($conexao);
           
           if($linhas>0)
           {
                session_start();
                $_SESSION["usuario"]=$email;
                while($exibirNome=mysqli_fetch_array($resultado))
                {
                    $nome=$exibirNome[0];
                    $nome_usuario=$exibirNome[1];
                    $senhausuario=$exibirNome[2];
                }
                $_SESSION['nome']=$nome;
                header("location: sessao.php");
           }
                else
                {
                    echo "Dados incorretos! <br>";
                }
        ?>

