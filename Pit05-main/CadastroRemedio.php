<?php
if(isset($_POST["Voltar"])){
    header("Location: menu.php");
}


include_once("PDO/pdo.php");

if(isset($_POST['cadMed'])){

    $id_usuario = $_POST['idUsuario'];
    $apelido = $_POST['apelido'];
    $tipoMan = $_POST['tipoMan'];
    $dosagem = $_POST['dosagem'];
    $tipoGen = $_POST['tipoGen'];
    $nomeMedicamento = $_POST['NomeMedicamento'];
    $caixas = $_POST['caixas'];
    $comprimidos = $_POST['comprimidos'];
    $efeitos = $_POST['efeito'];
    $farmaceutica = $_POST['farmaceutica'];
    $frequencia = $_POST['frequencia'];
    $horario = $_POST['horario'];

    $result = mysqli_query($conexao, "INSERT INTO medicamentos(id_usuario, apelido, tipoMan, dosagem, tipoGen, nome, caixas, comprimidos, efeito, farmaceutica, frequencia, horario)
     VALUES('$id_usuario','$apelido', '$tipoMan', '$dosagem', '$tipoGen', '$nomeMedicamento', '$caixas', '$comprimidos', '$efeitos', '$farmaceutica', '$frequencia', '$horario')");
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="CSS/style2.css">
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
            <input type="submit" id="Voltar" name="Voltar" value="Voltar">
        </form>
    </header>

    <main>
        <form method="post" action="CadastroRemedio.php" id="Form">
            <div>
                <img src="IMG/RemedioCadastro.png" id="ImgAvatar">
                <h2 id="Acessar">Cadastrar Medicamento</h2>
            </div>
            <div class="SubContainer">
                <p>CÓDIGO DO USUÁRIO:</p>
                <input type="number" name="idUsuario" id="ApelidoMedicamento">
                <br>
            </div>
            <div class="SubContainer">
                <p>APELIDO DO MEDICAMENTO:</p>
                <input type="text" name="apelido" id="ApelidoMedicamento">
                <br>
            </div>
            <div>
            <p style="text-align: center;font-size: 20px; margin-bottom: 10px;">
            O Remédio é Manipulado ou não?</p>
                <input type="radio" name="tipoMan" id="manipulado" value="MANIPULADO">
                <label for="manipulado">Manipulado</label>
                <input type="radio" name="tipoMan" id="n_manipulado" value="NAO MANIPULADO">
                <label for="n_manipulado">Não manipulado</label>
                <p></p>
            </div>
            <div id="ContainerMiligramas">
                <p>MILIGRAMAS DO MEDICAMENTO:</p>
                <input type="text" name="dosagem" id="Miligramas">
                <br>
            </div>
            <div>
                <p id="PerguntaTipoMEDICAMENTO">Tipo do Medicamento:</p>
                <div>
                    <input type="radio" name="tipoGen" id="tipoGenerico" value="generico">
                    <label for="tipoGenerico">Genérico</label>
                    <input type="radio" name="tipoGen" id="tipoOriginal" value="original">
                    <label for="tipoOriginal">Original</label>
                    <br>
                </div>
            </div>
            <div class="SubContainer">
                <p>NOME DO MEDICAMENTO:</p>
                <input type="text" name="NomeMedicamento" id="NomeMedicamento">
                <br>
            </div>
            <div class="SubContainer">
                <p>Quantidade:</p>
            </div>
            <div id="ContainerQuantidade">
                <div class="">
                    <p>Caixas:</p>
                    <input type="text" name="caixas" class="Quantidade">   
                    <br>
                </div>
                <div class="">
                    <p>Comprimidos:</p>
                    <input type="text" name="comprimidos" class="Quantidade">
                    <br>
                </div>
            </div>
            <div class="SubContainer">
                <p>Efeitos:</p>
                <input type="text" name="efeito" id="efeitos">
                <br>
            </div>
            <div class="SubContainer">
                <p>FARMACEUTICA:</p>
                <input type="text" name="farmaceutica" id="Farmaceutica">
                <br>
            </div>
            <div>
                <p id="HoraMedicamento">HORÁRIO DO MEDICAMENTO :</p>
                <div id="HoraRemedio">
                    <input type="radio" name="frequencia" id="4horas" value="A cada 4 horas">
                    <label for="4horas">A cada 4 horas</label>
                    
                    <input type="radio" name="frequencia" id="6horas" value="A cada 6 horas">
                    <label for="6horas">A cada 6 horas</label>
                    
                    <input type="radio" name="frequencia" id="8horas" value="A cada 8 horas">
                    <label for="8horas">A cada 8 horas</label>
                    
                    <input type="radio" name="frequencia" id="12horas" value="A cada 12 horas">
                    <label for="12horas">A cada 12 horas</label>
                    
                    <input type="radio" name="frequencia" id="Dia" value="A cada dia">
                    <label for="Dia">A cada Dia</label>
                </div>
            </div>
            <div class="SubContainer">
                <p>QUE HORAS PRETENDE COMEÇAR:</p>
                <input type="time" name="horario" id="HoraComeco">
                <br>
            </div>
            <div>
                <input type="submit" name="cadMed" value="Cadastrar Medicamentos" id="BtnCadastro">
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
                <a href="">
                    <li>Suporte +</li>
                </a>
                <a href="">
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
</body>

</html>