<?php
$sucesso = false;

if (isset($_POST['nome'])) {
    $aviso = '';

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $area = $_POST['area'];
    $mensagem = $_POST['mensagem'];

    if (empty($_POST['nome'])) {
        $aviso .= 'Favor preencher o nome.<br>';
    }
    if (empty($_POST['email'])) {
        $aviso .= 'Favor preencher o email.<br>';
    }
    if (empty($_POST['area'])) {
        $aviso .= 'Favor preencher a area.<br>';
    }
    if (empty($_POST['mensagem'])) {
        $aviso .= 'Favor preencher a mensagem.<br>';
    }

    if (empty($aviso)) {
        $aviso .= 'Recebemos sua mensagem. Dados enviados. <br>';
        $aviso .= 'Nome: ' . $nome . '<br>';
        $aviso .= 'Email: ' . $email . '<br>';
        $aviso .= 'Mensagem: ' . $mensagem . '<br>';

        $aviso .= '<br><br> <a href="contato.php">Voltar</a>';

        $sucesso = true;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulário</title>
</head>
<body>
<?php if (!empty($aviso)) : ?>
    <h2><?php print $aviso; ?></h2>
<?php endif; ?>

<?php if (!$sucesso) : ?>
    <form action="contato.php" method="post">
        <label for="nome">Nome:</label>
        <input id="nome" type="text" name="nome" value="<?php if (isset($nome)) {
            echo $nome;
        } ?>"><br>
        <label for="email">Email:</label>
        <input id="email" type="email" name="email" value="<?php if (isset($email)) {
            echo $email;
        } ?>"><br>
        Selecione para quem quer enviar:<br>
        <select name="area">
            <option value="vendas">Vendas</option>
            <option value="suporte">Suporte</option>
        </select><br>
        Mensagem: <br>
        <textarea name="mensagem" cols="30" rows="10"><?php if (isset($mensagem)) {
                echo $mensagem;
            } ?></textarea><br>
        <input type="submit" value="Enviar">
    </form>
<?php endif; ?>
</body>
</html>
