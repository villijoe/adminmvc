<?php

/**
 * Class ParentController
 */

class ParentController
{
    protected $model_name;
    protected $folder_view_name;

    public function __construct()
    {
        $this->model_name = str_replace('Controller', '', get_called_class());
        $this->folder_view_name = strtolower(substr($this->model_name, 0, -1));
    }

    public function actionIndex()
    {
        $this->list = array();
        $method_name = 'get' . $this->model_name . 'List';
        $list = call_user_func($this->model_name . '::' . $method_name);

        require_once(ROOT . '/views/' . $this->folder_view_name . '/index.php');

        return true;
    }

    public function actionView($id)
    {
        if ($id) {
            $method_name = 'get' . $this->model_name . 'ItemById';
            $item = call_user_func($this->model_name . '::' . $method_name);

            require_once(ROOT . '/views/' . $this->folder_view_name . '/book.php');
        }
    }

    public function actionFinished()
    {
        $method_name = 'get' . str_replace('action', '', __FUNCTION__) . $this->model_name;
        $list = call_user_func($this->model_name . '::' . $method_name);

        require_once(ROOT . '/views/' . $this->folder_view_name . '/finished.php');

        return true;
    }
    public function actionProcess()
    {
        $method_name = 'get' . str_replace('action', '', __FUNCTION__) . $this->model_name;
        $list = call_user_func($this->model_name . '::' . $method_name);

        require_once(ROOT . '/views/' . $this->folder_view_name . '/process.php');

        return true;
    }
}