<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Home</title>
        <link rel="icon" type="image/png"  href="imagens/logo.png">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body class="bg-dark">
        <style>
            .timelink{
                font-size: 30px;
                text-decoration: none;
            }    
            .letras{
                font-family: fantasy;
                color: 255 228 181;
            }


        </style>
        <div class="container-fluid bg-light text-light">
            <div class="row p-2">
                <div class="mx-auto"><img  src="imagens/logo.png" height="50px" width="50px"></div>
                <div class="mr-0">
                        <a class="btn btn-outline-dark py-0 my-3 botao" href="logout.php">Sair</a>
                </div>
                <div class="text-dark text-center float-left mt-2">              
                    <h3>
                        <?php
                            session_start();
                            if(!isset($_SESSION["usuario"]))
                                {
                                    echo "Erro";
                                    exit();
                                }
                            echo "Olá ".$_SESSION["usuario"];
                        ?>
                    </h3>
                </div>
            </div>
        </div>
        <div class="mx-auto mt-3 text-center">
            <img src="imagens/logo-lol.png" height="300px" width="700px" class="mx-auto">
        </div>
        <div class="container">
            <div class="row">
                <div class="col text-center mx-auto">
                    <img src="imagens/times-logo.jfif" height="200px" width="350px">
                    <a href="tela_times.html" class="text-light timelink letras">Principais times</a>
                </div>
                <div class="col text-center mx-auto">
                    <img src="imagens/jogadores.jpg" height="200px" width="350px">
                    <a href="tela_jogadores.html" class="text-light timelink letras">Principais jogadores</a>
                </div>
                <div class="col text-center mx-auto">
                    <img src="imagens/ligas.jpg" height="200px" width="350px">
                    <a href="tela_ligas.html" class="text-light timelink letras">Principais ligas</a>
                </div>
            </div>

        </div>
        

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>