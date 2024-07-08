<?php
require_once "../servidor.php";

// imsert into
/*
$id = 6;
$titulo = 'HTML5';
$autor = 'Linus';
$categoria = 'Web';
$preco = 2.99;
$paginas = 50;

consulta_dados("insert into livros (id, titulo, autor, categoria, preco, paginas) 
    values ($id, '$titulo', '$autor', '$categoria', $preco, $paginas)");
*/

// update
/*
consulta_dados("update livros set titulo = 'PHP para iniciantes' where id =     2");
*/

// delete
/*
consulta_dados("delete from livros where id = '1'");
*/

// select
$livros_query = consulta_dados('select * from livros');
while ($livro = mysqli_fetch_array($livros_query)) {
    echo '<pre>';
    print_r($livro);
    echo '</pre>';
}
