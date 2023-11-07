<?php 

include_once('PDO/pdo.php');

if(isset($_POST['update'])){
    
    $id = $_POST['id'];

    $apelido = $_POST['ApelidoMedicamento'];
    $tipoMan = $_POST['tipoMan'];
    $dosagem = $_POST['dosagem'];
    $tipoGen = $_POST['tipoGen'];
    $nomeMedicamento = $_POST['nome'];
    $caixas = $_POST['QuantidadeCaixas'];
    $comprimidos = $_POST['QuantidadeComprimidos'];
    $efeitos = $_POST['efeito'];
    $farmaceutica = $_POST['Farmaceutica'];
    $frequencia = $_POST['Horario'];
    $horario = $_POST['HoraComeco'];

    
    $sqlUpdate = "UPDATE medicamentos SET apelido = '$apelido', tipoMan = '$tipoMan' , dosagem = '$dosagem', tipoGen = '$tipoGen', nome = '$nomeMedicamento', caixas = $caixas, comprimidos = '$comprimidos', efeito = '$efeitos', farmaceutica = '$farmaceutica', frequencia = '$frequencia', horario = '$horario' WHERE id = '$id'";

    $result = $conexao->query($sqlUpdate);
}

header('Location: meusMedicamentos.php');

?>