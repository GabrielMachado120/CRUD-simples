<?php
function gravar_produto($conexao, $nome, $marca, $modelo, $categoria, $material, $tamanho, $peso, $tensao, $estoque, $estoque_minimo, $caracteristicas) {
    $nome = mysqli_real_escape_string($conexao, $nome);
    $marca = mysqli_real_escape_string($conexao, $marca);
    $modelo = mysqli_real_escape_string($conexao, $modelo);
    $categoria = mysqli_real_escape_string($conexao, $categoria);
    $material = mysqli_real_escape_string($conexao, $material);
    $tamanho = mysqli_real_escape_string($conexao, $tamanho);
    $peso = mysqli_real_escape_string($conexao, $peso);
    $tensao = mysqli_real_escape_string($conexao, $tensao);
    $estoque = mysqli_real_escape_string($conexao, $estoque);
    $estoque_minimo = mysqli_real_escape_string($conexao, $estoque_minimo);
    $caracteristicas = mysqli_real_escape_string($conexao, $caracteristicas);

    $sql = "INSERT INTO produtos (nome, marca, modelo, categoria, material, tamanho, peso, tensao, estoque, estoque_minimo, caracteristicas)
            VALUES ('$nome', '$marca', '$modelo', '$categoria', '$material', '$tamanho', '$peso', '$tensao', '$estoque', '$estoque_minimo', '$caracteristicas');";

    return mysqli_query($conexao, $sql);
}

function listarProdutos($conexao) {
    $sql = "SELECT * FROM produtos ORDER BY nome ASC";
    return mysqli_query($conexao, $sql);
}

function buscarProdutos($conexao, $id) {
    $sql = "SELECT * FROM produtos WHERE id = $id";
    return mysqli_fetch_assoc(mysqli_query($conexao, $sql));
}    
?>