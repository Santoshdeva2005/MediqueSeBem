<?php

if(isset($_POST["Voltar"])){
    header('Location: menu.php');
}

include_once("PDO/pdo.php");

if(isset($_POST['cadastrarConsulta'])){
    
    $id_usuario = $_POST['idUsuario'];
    $medico = $_POST['medico'];
    $motivo = $_POST['motivo'];
    $data_cons = $_POST['data_cons'];
    $email = $_POST['email'];
    $clinica = $_POST['clinica'];
    $endereco = $_POST['endereco'];
    

    $result = mysqli_query($conexao, "INSERT INTO consultas(id_usuario, medico, motivo, data_cons, email, clinica, endereco) VALUES ('$id_usuario', '$medico', '$motivo', '$data_cons', '$email', '$clinica', '$endereco')");

   

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="CSS/style9.css">
    <link rel="shortcut icon" href="IMG/farmácia.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;700&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div id="Part1">
            <div id="LogoTipo">
                <h1>Medique-se</h1>
                <h1 id="Lado">BEM</h1>
            </div>
        </div>
        <div id="Pesquisa">
            <input type="search" name="" id="BarraPesquisa">
            <img id="Lupa" src="IMG/LupaPesquisa.png">
        </div>
        <form method="post">
            <input type="submit" name="Voltar" id="Voltar" value="Voltar">
        </form>
    </header>
    <main>
        <form action="CadastroConsulta.php" method="post" id="Form">
            <div>
                <h1>Cadastrar Consulta</h1>
            </div>
            <div class="SubContainer">
                <p>Código do Usuário:</p>
                <input type="number" name="idUsuario">
            </div>
            <div class="SubContainer">
                <p>Nome do Medico:</p>
                <input type="text" name="medico">
            </div>
            <div class="SubContainer">
                <p>Motivo:</p>
                <input type="text" name="motivo">
            </div>
            <div class="SubContainer">
                <p>Data da Consulta:</p>
                <input type="date" name="data_cons" id="InputData">
            </div>
            <div class="SubContainer">
                <p>Email:</p>
                <input type="text" name="email">
            </div>
            <div class="SubContainer">
                <p>Clínica:</p>
                <input type="text" name="clinica">
            </div>
            <div class="SubContainer">
                <p>Endereço:</p>
                <input type="text" name="endereco">
            </div>
            <div>
                <input type="submit" name="cadastrarConsulta" value="Salvar Consulta" id="Cadastrar">
            </div>
        </form>
    </main>
    <footer>
        <div id="Links">
            <ul>
                <a href="">
                    <li>Nós Conheça +</li>
                </a>
                <a href="">
                    <li>Termos de uso +</li>
                </a>
                <a href="home.html">
                    <li>Suporte +</li>
                </a>
                <a href="CadastroAliado.html">
                    <li>Mais informações +</li>
                </a>
            </ul>
        </div>
        <div id="IconsFoot">
            <div id="ImgFoot">
                <img src="IMG/Twitter.png" id="IconTwitter">
                <img src="IMG/Pinterest.png" id="IconPinterest">
                <img src="IMG/TikTok.png" id="IconTikTok">
                <img src="IMG/Instagram.png" id="IconInsta">
            </div>
        </div>
    </footer>
    <script src="script.js"></script>
</body>

</html>