<?php

define('db_host', 'db');
define('db_user', 'root');
define('db_pass', 'root');
define('db_name', 'phponline');

$mysql = mysqli_connect(db_host, db_user, db_pass, db_name, 3306);

function consulta_dados($query){
    global $mysql;
    $resultado = mysqli_query($mysql, $query);
    return $resultado;
}

