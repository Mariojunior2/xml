<?php 
$xml = simplexml_load_file("book.xml") or die("Erro ao carregar o XML");

foreach($xml->book as $catalogs) {
    echo "Título: ". $catalogs->author . "<br><br>";
    echo "Autor: ". $catalogs->title . "<br><br>";
    echo "Ano: ". $catalogs->publish_date . "<br><br>";
    echo "Gênero: ". $catalogs->genre . "<br><br>";
}
?>