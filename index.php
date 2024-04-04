<?php

// Определить многомерный массив, представляющий информацию о книгах в библиотеке
$libros = [
    [
        "titulo" => "El Quijote",
        "autor" => "Miguel de Cervantes",
        "genero" => "Novela"
    ],
    [
        "titulo" => "Cien años de soledad",
        "autor" => "Gabriel García Márquez",
        "genero" => "Novela"
    ],
    [
        "titulo" => "El principito",
        "autor" => "Antoine de Saint-Exupéry",
        "genero" => "Novela corta"
    ],
    [
        "titulo" => "1984",
        "autor" => "George Orwell",
        "genero" => "Novela distópica"
    ],
    [
        "titulo" => "El señor de los anillos",
        "autor" => "J.R.R. Tolkien",
        "genero" => "Fantasía"
    ]
];

// Получить жанр, по которому нужно искать книги
$genero_buscado = "Novela";

// Найти все книги определенного жанра
$libros_encontrados = [];
foreach ($libros as $libro) {
    if ($libro["genero"] == $genero_buscado) {
        $libros_encontrados[] = $libro;
    }
}

// Вывести результат
echo "Книги жанра $genero_buscado:" . PHP_EOL;
foreach ($libros_encontrados as $libro) {
    echo "- {$libro["titulo"]} por {$libro["autor"]}" . PHP_EOL;
}
?>