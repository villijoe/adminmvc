<?php

include_once ROOT . '/models/Books.php';
include_once ROOT . '/controllers/ParentController.php';

class BooksController extends ParentController
{
    /**
     * @desc func index page books
     * @return bool
     */
    /*public function actionIndex()
    {
        $booksList = array();
        $model_name = str_replace('Controller', '', get_class());
        $booksList = $model_name::getBooksList();

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
    }*/

    /*public function actionFinished()
    {
        $booksFinishedList = Books::getFinishedBooks();

        require_once(ROOT . '/views/book/finished.php');

        return true;
    }*/

/*    public function actionProcess()
    {
        $booksProcessList = Books::getProcessBooks();

        require_once(ROOT . '/views/book/process.php');

        return true;
    }*/
}