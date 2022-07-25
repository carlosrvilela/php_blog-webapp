<?php
include '../src/Artigo.php';
require_once '../bd-config.php';

$artigo = new Artigo($mysql);
$artigos = $artigo->exibirTodos();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Página administrativa</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>

<body>
    <div id="container">
        <h1>Página Administrativa</h1>
        <div>
            <?php foreach ($artigos as $artigo) : ?>
                <div id="artigo-admin">
                    <?php print $artigo['titulo'] ?>
                    <nav>
                        <a class="botao" href="editar-artigo.php?id=<?php print $artigo['id'] ?>" >Editar</a>
                        <a class="botao" href="excluir-artigo.php?id=<?php print $artigo['id'] ?>">Excluir</a>
                    </nav>
                </div>
                <?php endforeach; ?>
        </div>
        <a class="botao botao-block" href="adicionar-artigo.php">Adicionar Artigo</a>
    </div>
</body>

</html>