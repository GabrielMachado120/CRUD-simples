<?php
include 'conexao.php';
include 'funcoes.php';
$produtos = listarProdutos($conexao);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar produtos</title>
</head>
<body>
    <h1>Listar produtos</h1>
    <?php while ($produto = mysqli_fetch_assoc($produtos)) { ?>
    <p>
        <strong>Nome:</strong> <?php echo $produto['nome']; ?><br>
        <strong>Marca:</strong> <?php echo $produto['marca']; ?><br>
        <strong>Modelo:</strong> <?php echo $produto['modelo']; ?><br>
        <strong>Categoria:</strong> <?php echo $produto['categoria']; ?><br>
        <strong>Material:</strong> <?php echo $produto['material']; ?><br>
        <strong>Tamanho:</strong> <?php echo $produto['tamanho']; ?><br>
        <strong>Peso:</strong> <?php echo $produto['peso']; ?><br>
        <strong>Tensão:</strong> <?php echo $produto['tensao']; ?><br>
        <strong>Estoque:</strong> <?php echo $produto['estoque']; ?><br>
        <strong>Estoque Mínimo:</strong> <?php echo $produto['estoque_minimo']; ?><br>
        <strong>Características:</strong> <?php echo $produto['caracteristicas']; ?><br>
    </p>
    <?php } ?>
</body>
</html>