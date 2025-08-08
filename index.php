<?php 
$xml = simplexml_load_file("livros.xml") or die("Erro ao carregar o XML");

foreach($xml->$livros as $livro) {
    echo "Título: ". $livro->titulo . "<br>";
    echo "Autor: ". $livro->autor . "<br>";
    echo "Ano: ". $livro->ano . "<br>";
}

?>