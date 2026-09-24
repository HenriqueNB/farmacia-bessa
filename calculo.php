<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Resultado - Farmácia Parecetaloka</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container result-container">
        <h2>Resumo do Pedido</h2>

    <?php
    $nome = $_POST['nome'];
    $total_pedido = floatval($_POST['total_pedido']);

    $desconto_idade = 0;

    if (isset($_POST['entre_51_e_70'])) {
        $desconto_idade = 0.05;
    } elseif (isset($_POST['maior_de_70'])) {
        $desconto_idade = 0.07;
    }

    $desconto_fidelidade = 0;
    if (isset($_POST['cartao_fidelidade'])) {
        $desconto_fidelidade = 0.05; 
    }

    $desconto_total_percentual = $desconto_idade + $desconto_fidelidade;
    $valor_desconto = $total_pedido * $desconto_total_percentual;
    $valor_final = $total_pedido - $valor_desconto;

    echo "Cliente: " . htmlspecialchars($nome) . "<br><br>";
    echo "Valor Original: R$ " . number_format($total_pedido, 2, ',', '.') . "<br>";
    echo "Desconto Total Aplicado: " . ($desconto_total_percentual * 100) . "% (R$ " . number_format($valor_desconto, 2, ',', '.') . ")<br>";
    echo "<strong>Valor Final a Pagar: R$ " . number_format($valor_final, 2, ',', '.') . "</strong><br><br>";
    ?>

    <a href="index.html">Voltar</a>
    </div>
</body>
</html>