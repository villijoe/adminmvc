<?php

include_once ROOT . '/models/Books.php';

class BooksController
{
    public function actionIndex()
    {
        $newsList = array();
        $newsList = News::getNewsList();

        require_once(ROOT . '/views/books/index.php');

        return true;
    }

    public function actionView($id)
    {
        if ($id) {
            $newsItem = News::getNewsItemById($id);

            require_once(ROOT . '/views/books/book.php');


        }

        return true;
    }
}