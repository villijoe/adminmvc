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
        $method_name = 'getList';
        $list = call_user_func($this->model_name . '::' . $method_name);

        require_once(ROOT . '/views/' . $this->folder_view_name . '/index.php');

        return true;
    }

    public function actionView($id)
    {
        if ($id) {
            $method_name = 'getItemById';
            $item = call_user_func($this->model_name . '::' . $method_name, $id);

            require_once(ROOT . '/views/' . $this->folder_view_name . '/' . $this->folder_view_name . '.php');
        }

        return true;
    }

    public function actionFinished()
    {
        $method_name = 'get' . str_replace('action', '', __FUNCTION__);
        $list = call_user_func($this->model_name . '::' . $method_name);

        require_once(ROOT . '/views/' . $this->folder_view_name . '/finished.php');

        return true;
    }
    public function actionProcess()
    {
        $method_name = 'get' . str_replace('action', '', __FUNCTION__);
        $list = call_user_func($this->model_name . '::' . $method_name);

        require_once(ROOT . '/views/' . $this->folder_view_name . '/process.php');

        return true;
    }

    public function actionAdd()
    {
        if (isset($_POST['title']) && !empty($_POST['title'])) {
            call_user_func($this->model_name . '::' . 'getAdd');
            header('Location: http://127.0.0.1/adminmvc/' . $this->folder_view_name . 's/process');
        } else {
            require_once(ROOT . '/views/' . $this->folder_view_name . '/add.php');
        }

        return true;
    }

    public function actionEdit($id)
    {
        if ($id) {
            if (isset($_POST['edit'])) {
                call_user_func($this->model_name . '::' . 'getEdit', $id);
                header('Location: http://127.0.0.1/adminmvc/' . $this->folder_view_name . 's/process');
            } else {
                $method_name = 'getItemById';
                $item = call_user_func($this->model_name . '::' . $method_name, $id);
                require_once(ROOT . '/views/' . $this->folder_view_name . '/edit.php');
            }
        }
        return true;
    }

    public function actionDelete($id)
    {
        if ($id) {
            call_user_func($this->model_name . '::' . 'getDelete', $id);
            header('Location: http://127.0.0.1/adminmvc/' . $this->folder_view_name . 's/process');
        }
    }

}