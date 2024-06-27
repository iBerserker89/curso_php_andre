<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    $nome = 'Luciano Barros';

    echo $heredoc = <<<BLS
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent efficitur dolor nec urna mollis, id cursus elit molestie. Curabitur tristique aliquam odio eu <strong>$nome</strong> imperdiet. Quisque libero est, cursus sed consectetur id, gravida nec nibh. Nunc sed leo venenatis felis tempor tincidunt. Morbi nec justo nec sapien rutrum vulputate. 
        BLS;


    echo '<hr>';

    echo $heredoc;

    echo '<hr>';

    echo $heredoc2 = <<<QQC
            Este é um teste utilizando acentuação no PHP.
        QQC;

    ?>
</body>
</html>


