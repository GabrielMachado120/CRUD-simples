<?php
// esta pagina será responsável por cadastrar os dados
include 'conexao.php';
include 'funcoes.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'] ?? '';
    $marca = $_POST['marca'] ?? '';
    $modelo = $_POST['modelo'] ?? '';
    $categoria = $_POST['categoria'] ?? '';
    $material = $_POST['material'] ?? '';
    $tamanho = $_POST['tamanho'] ?? '';
    $peso = $_POST['peso'] ?? '';
    $tensao = $_POST['tensao'] ?? '';
    $estoque = $_POST['estoque'] ?? '';
    $estoque_minimo = $_POST['estoque_minimo'] ?? '';
    $caracteristicas = $_POST['caracteristica'] ?? '';

    $resultado = gravar_produto($conexao, $nome, $marca, $modelo, $categoria, $material, $tamanho, $peso, $tensao, $estoque, $estoque_minimo, $caracteristicas);

    if ($resultado) {
        echo 'Produto cadastrado com sucesso!';
    } else {
        echo 'Erro ao cadastrar produto: ' . mysqli_error($conexao);
    }
}
?>
<link rel="stylesheet" href="style.css">
<h1 id='title'>Cadastro</h1>
<form action="cadastro.php" method="post">
    <p>Nome:</p> <input type="text" name="nome"><br>
    <p>Marca:</p> <input type="text" name="marca"><br>
    <p>Modelo:</p> <input type="text" name="modelo"><br>
    <p>Categoria:</p> <input type="text" name="categoria"><br>
    <p>Material:</p> <input type="text" name="material"><br>
    <p>Tamanho:</p> <input type="text" name="tamanho"><br>
    <p>Peso:</p> <input type="text" name="peso"><br>
    <p>Tensão:</p> <input type="text" name="tensao"><br>
    <p>Estoque:</p> <input type="text" name="estoque"><br>
    <p>Estoque Minimo:</p> <input type="text" name="estoque_minimo"><br>
    <p>Características:</p> <input type="text" name="caracteristica"><br> <br>
    <input type="submit" value="Cadastrar" class="cadastrar">
</form>