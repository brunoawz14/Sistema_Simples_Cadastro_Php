<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro Feito</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body style="background-color:#111111;">

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nome  = $_POST['nome'];
    $idade = $_POST['idade'];
    $profi = $_POST['profi'];
    $sal   = $_POST['sal'];
    $ex    = $_POST['ex'];
?>

<div class="w3-display-container" style="height:100vh;">
  <div class="w3-display-middle w3-card w3-white w3-padding w3-round-large" style="max-width:500px; width:100%;">

    <h2 class="w3-center">📋 Dados Cadastrados</h2>
    <hr>

    <p><strong>Nome:</strong> <?= $nome ?></p>
    <p><strong>Idade:</strong> <?= $idade ?> anos</p>
    <p><strong>Profissão:</strong> <?= $profi ?></p>
    <p><strong>Salário pretendido:</strong> R$ <?= $sal ?></p>

    <p><strong>Experiência anterior:</strong></p>
    <div class="w3-light-grey w3-padding">
        <?= nl2br($ex) ?>
    </div>

    <hr>
    <p class="w3-center w3-text-green">
        Obrigado, <?= $nome ?>! Seu cadastro foi realizado com sucesso.<Br>
        Entraremos em contato em breve!!!
    </p>

    <a href="cadastro.html" class="w3-button w3-black w3-round-large w3-block">Voltar</a>

  </div>
</div>

<?php
} else {
    echo "<p class='w3-center w3-text-red'>Acesso inválido.</p>";
}
?>

</body>
</html>

<!-- Confesso que minha maior dificultade para fazer essa atividade, foi a parte de frontend,
 porque n tenho muita familiaridade com o html e css, então para mim, foi muito dificil fazer
 o design em si, botões e tudo mais que esta relacionado a imagem do site.

 A organização do site em si foi bem facil de fazer para mim, eu pensei em como eu gostaria 
 de fazer um formulario e como ficaria claro de mexer no formulario, como ate alguem que não
 familaridade com tecnologia, entender para que cada campo server e que informação colocar em
 cada campo.
 Resumidamente: eu visualizei o site na minha mente, e transformei em codigo e cheguei no resultado
 que eu esperava, e fui implementando mais funcões e tudo mais, como essa atividade não foi algo grande,
 não precisei colocar em um papel e arquitetar cada ordem de codigo.
 Apanhei bastante com esse framework kkk.
  -->