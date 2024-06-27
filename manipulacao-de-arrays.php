<?php
/*
 * count() - retorna o número de posições que existe no array
 *
 * in_array() - retorna verdadeiro se o conteúdo exisste no array
 *
 * array_key_exists() - retorna verdadeiro se a posição do array existe
 *
 * isset() - retorna verdadeiro se existe algum conteúdo válido na posição do array
 *
 * array-pop() - extrai e retorna o valor do último elemento de array, diminuindo o array em um elemento.
 *
 * array_shift() - retira o primeiro elemento de array e o retorna, diminuindo array em um elemento e movendo todos os outros elementos para trás. Todas as chaves numéricas serão alteradas para começar a contar a partir de zero, enquanto chaves literais não serão afetadas.
 *
 * array_unshift() — Adiciona um ou mais elementos no início de um array
 *
 * array_push() — Adiciona um ou mais elementos no final de um array
 *
 * $array[] - adiciona valores no final do array
 *
 * sort() — Ordena um array em ordem ascendente
 *
 * asort() — Ordena um array em ordem crescente e mantém a associação de índices
 *
 * ksort() — Ordena um array pelas chaves em ordem crescente
 *
 * shuffle() — Embaralha um array
 */

$meses = array(
    'Janeiro', 'Fevereiro', 'Março',
    'Abril', 'Maio', 'Junho',
    'Julho', 'Agosto', 'Setembro',
    'Outubro', 'Novembro', 'Dezembro',
);

$dados_pessoais = array(
    'nome' => 'Luciano',
    'sobrenome' => 'Barros',
    'sexo' => 'masculino',
    'email' => 'lucianof.barros89@gmail.com',
    'telefone' => null,
);

echo count($meses);

echo '<hr>';

if (in_array('Janeiro', $meses)) {
    echo 'Achei';
} else {
    echo 'Não achei';
}

echo '<hr>';

if (array_key_exists('email', $dados_pessoais)) {
    echo 'Tem um campo email em dados pessoais';
} else {
    echo 'Não tem um campo email em dados pessoais';
}

echo '<hr>';

if (isset($dados_pessoais['telefone'])) {
    echo 'Tem um campo telefone em dados pessoais';
} else {
    echo 'Não tem um campo telefone em dados pessoais';
}

echo '<hr>';

echo '<pre>';
print_r($dados_pessoais);
echo '</pre>';

array_pop($dados_pessoais);
// Não cauxa erro se o array estiver vazio!!
echo '<pre>';
print_r($dados_pessoais);
echo '</pre>';

echo '<hr>';

echo '<pre>';
print_r($dados_pessoais);
echo '</pre>';

array_shift($dados_pessoais);
// Não cauxa erro se o array estiver vazio!!
echo '<pre>';
print_r($dados_pessoais);
echo '</pre>';

echo '<hr>';

array_unshift($dados_pessoais);
$dados_pessoais['nome'] = 'Eu fui adicionado com unshift';
/*
 * Versão	Descrição
7.3.0	Essa função agora pode ser chamada com apenas um parâmetro. Anteriomente, pelo menos dois parâmetros eram necessários.
 */
echo '<pre>';
print_r($dados_pessoais);
echo '</pre>';

echo '<hr>';

//sort($dados_pessoais);

/*
 * Nota:
Se dois elementos são comparados como iguais, eles mantêm sua ordem original. Antes do PHP 8.0.0, sua ordem relativa no array ordenado era indefinida.

Nota:
Esta função atribui novas chaves aos elementos do array. Ela removerá todas as chaves existentes que possam ter sido atribuídas, em vez de apenas reordenar as chaves.

Nota:
Redefine o ponteiro interno do array para o primeiro elemento.
 *
 * */

echo '<pre>';
print_r($dados_pessoais);
echo '</pre>';

echo '<hr>';

asort($dados_pessoais);

echo '<pre>';
print_r($dados_pessoais);
echo '</pre>';

echo '<hr>';

list($mes_um, $mes_dois, $mes_tres, , $mes_cinco) = $meses;
echo $mes_um;
echo '<br>';
echo $mes_dois;
echo '<br>';
echo $mes_tres;
echo '<br>';
echo $mes_cinco;

echo '<hr>';


/*
 * Versão	Descrição
8.0.0	O parâmetro key agora aceita bool, float, int, null, resource e string como argumentos.
 * */