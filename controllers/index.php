<?php
// контролер
Class Controller_Index Extends Controller_Base {

    // шаблон
    public $layouts = "main_template";
    private $fields = array('name', 'email', 'done');

    // экшен
    function index() {
        if(isset($_GET['order']) && in_array($_GET['order'], $this->fields)) {
            $order = $_GET['order'];
        } else {
            $order = 'id';
        }

        $select = array('limit' => 20, 'order' => $order);
        $model  = new Model_Tasks($select);
        $tasks  = $model->getAllRows();

        $this->template->vars('tasks', $tasks);
        $this->template->view('index');
    }

    function newTask() {
        if($_POST['name'] === '' || $_POST['email'] === '' || $_POST['text'] === '') {
            header("Location: /index?error=1");
        }

        $model = new Model_Tasks();

        if($_FILES['img']['name']) {
            $model->resize($_FILES['img']);
        }

        $model->name  = $_POST['name'];
        $model->email = $_POST['email'];
        $model->text  = $_POST['text'];
        $model->img   = $_FILES['img']['name'];
        $model->done  = 0;

        $model->save();
        header("Location: /");
    }
}