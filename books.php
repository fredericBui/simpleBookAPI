<?php

$books = [
    [
        'id' => 1,
        'title' => 'Book 1',
        'author' => 'Author 1',
        'genre' => 'Genre 1',
        'synopsis' => 'Synopsis 1'
    ],
    [
        'id' => 2,
        'title' => 'Book 2',
        'author' => 'Author 2',
        'genre' => 'Genre 2',
        'synopsis' => 'Synopsis 2'
    ],
];

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    header('Content-Type: application/json');

    if (isset($_GET['id'])) {
        $bookId = $_GET['id'];

        $foundBook = null;
        foreach ($books as $book) {
            if ($book['id'] == $bookId) {
                $foundBook = $book;
                break;
            }
        }

        if ($foundBook) {
            echo json_encode($foundBook);
        } else {
            echo json_encode(['error' => 'Book not found']);
        }
    } else {
        echo json_encode($books);
    }
}
