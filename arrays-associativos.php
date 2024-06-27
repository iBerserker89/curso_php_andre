<?php
$dados_pessoais = array(
        'nome' => 'Luciano',
        'sobrenome' => 'Barros',
        'sexo' => 'masculino',
        'email' => 'lucianof.barros89@gmail.com'
);

echo '<pre>';
print_r($dados_pessoais);
echo '</pre>';

echo '<hr><hr><hr>';

echo $dados_pessoais['nome'];

echo '<hr><hr><hr>';

/*
$_GET['variavel'];
$_POST['variavel'];
*/