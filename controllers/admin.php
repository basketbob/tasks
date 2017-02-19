<?php
Class Controller_Admin Extends Controller_Base {

    // шаблон
    public $layouts = "main_template";

    function __construct() {
        if(!isset($_COOKIE['authorised']) || !$_COOKIE['authorised']){
            header("Location: /login");
        }

        $this->template = new Template($this->layouts, get_class($this));
    }

    // экшен
    function index() {
        $select = array('limit' => 20, 'order' => 'id');
        $model  = new Model_Tasks($select);
        $tasks  = $model->getAllRows();

        $this->template->vars('tasks', $tasks);
        $this->template->view('admin');
    }

    function update() {
        $_POST['done'] = (isset($_POST['done'])) ? 1 : 0;

        $select = array( 'where' => 'id = ' . $_POST['id'] );

        $model = new Model_Tasks($select);
        $model->fetchOne();

        $model->text = $_POST['text'];
        $model->done = $_POST['done'];

        $model->update();

        echo 'Запись успешно обновлена!';
    }
}