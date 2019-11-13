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
                header("location: pag1.php");
           }
                else
                {
                    echo '<!DOCTYPE html>
                    <html lang="pt-br">
                        <head>
                            <title>Iniciar Sessão</title>
                            <meta charset="utf-8">
                            <link rel="icon" type="image/png"  href="imagens/logo.png">
                            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
                        </head>
                        <body class="bg-dark">
                            <style>
                                a{
                                    text-decoration: none;
                                }
                            </style>
                            <div class="container-fluid bg-light text-light">
                                <div class="row p-2">
                                    <div><img  src="imagens/logo.png" height="50px" width="50px"></div>
                                    <div class="mx-auto">
                                        <a class="btn btn-outline-dark py-0 my-3 botao" href="cadastro.html">Cadastre-se</a>
                                    </div>
                                </div>
                            </div>
                    
                            <div class="card bg-light text-dark mx-auto mt-5 p-4 shadow-lg" style="width: 40%;">
                                <h5 class="card-tittle mx-auto mb-5">INICIAR SESSÃO</h5>
                                <form action="login.php" method="POST">
                                    <div class="form-group">
                                        <label for="Login">Email de Usuário:</label>
                                        <input type="text" class="form-control" name="email" placeholder="Email de Usuário">
                                    </div>
                                    <div class="form-group mb-1">
                                        <label for="senha">Senha:</label>
                                        <input type="password" name="senha" name="senha" class="form-control" placeholder="Senha">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-danger mt-0" for="">*Senha ou e-mail incorretos</label>
                                    </div>
                                    <div class="text-center">
                                        <button class="btn btn-outline-dark">INICIAR</button>
                                    </div>
                                    
                                </form>
                            </div>
                        
                            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
                            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
                        </body>
                    </html>';
                }
        ?>

