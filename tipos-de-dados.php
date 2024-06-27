<?php
    // numeros inteiros
    $variavel = 15;
    echo is_integer($variavel);
    echo '<br>';

    // numeros com ponto flutuante
    $variavel2 = 13.10;
    echo is_float($variavel2);
    echo '<br>';

    // strings
    $variavel3 = 'luciano';
    $variavel4 = "luciano";
    echo is_string($variavel4);
    echo '<br>';


    // booleanos - bool
    $variavel5 = true;
    $variavel5 = false;
    is_bool($variavel5);
    echo '<br>';

    // arrays
    $variavel6 = array(1, 2, 3, 10.1, 'Luciano', true);
    echo gettype($variavel6);
    echo '<br>';

    // objetos
    // $variavel = new Objeto();

    // recursos
    $variavel7 = mysqli_connect('localhost', 'root');
    echo is_resource($variavel7);
    echo '<br>';

    // nulo
    $variavel = null;
    echo gettype($variavel);
