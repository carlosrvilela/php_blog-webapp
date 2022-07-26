<?PHP 
require_once '../src/Artigo.php';
require_once '../src/redireciona.php';
require_once '../bd-config.php'; 

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $artigo = new Artigo($mysql);
    $artigo->editar($_POST['id'], $_POST['titulo'], $_POST['conteudo']);

    redireciona('/blog/admin/index.php');
}

$artigo_obj = new Artigo($mysql);
$artigo = $artigo_obj->encontrarPorId($_GET['id']);


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <meta charset="UTF-8">
    <title>Editar Artigo</title>
</head>

<body>
    <div id="container">
        <h1>Editar Artigo</h1>
        <form action="editar-artigo.php" method="post">
            <p>
                <label for="titulo">Digite o novo título do artigo</label>
                <input class="campo-form" type="text" name="titulo" id="titulo" value="<?php print $artigo['titulo']; ?>" />
            </p>
            <p>
                <label for="conteudo">Digite o novo conteúdo do artigo</label>
                <textarea 
                    class="campo-form" type="text" name="conteudo" id="titulo"><?php print nl2br($artigo['conteudo']); ?>
                </textarea>
            </p>
            <p>
                <input type="hidden" name="id" value="<?php print $artigo['id']; ?>" />
            </p>
            <p>
                <button class="botao">Editar Artigo</button>
            </p>
        </form>
    </div>
</body>

</html>