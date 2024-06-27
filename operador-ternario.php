<?php

    $acesso = 1;
    echo 'usuario';
    echo ($acesso > 0) ? 'registrado' : 'naõ registrado';

    if ($acesso > 0) {
        echo 'usuário registrado';
    } else {
        echo 'usuário não registrado';
    }