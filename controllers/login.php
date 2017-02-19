<?php
// контролер
Class Controller_Login Extends Controller_Base {

    // шаблон
    public $layouts = "main_template";

    // экшен
    function index() {
        if(isset($_POST['login']) && isset($_POST['pwd'])) {
            if($_POST['login'] == 'admin' && $_POST['pwd'] == 123){
                setcookie('authorised', 1);

                header("Location: /admin");
            }
        }

        $this->template->view('login');
    }

}