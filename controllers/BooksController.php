<?php

include_once ROOT . '/models/Books.php';

class BooksController
{
    public function actionIndex()
    {
        $booksList = array();
        $booksList = Books::getBooksList();

        require_once(ROOT . '/views/book/index.php');

        return true;
    }

    public function actionView($id)
    {
        if ($id) {
            $booksItem = Books::getBooksItemById($id);

            require_once(ROOT . '/views/book/book.php');


        }

        return true;
    }

    public function actionFinished()
    {
        $booksFinishedList = Books::getFinishedBooks();

        require_once(ROOT . '/views/book/finished.php');

        return true;
    }
}