<?php
// модель
Class Model_Tasks Extends Model_Base {

    public $id;
    public $name;
    public $email;
    public $text;
    public $img;
    public $done;

    public function fieldsTable(){
        return array(
            'id'    => 'Id',
            'name'  => 'Header',
            'email' => 'Short text',
            'text'  => 'Full text',
            'img'   => 'Update date',
            'done'  => 'Done'
        );
    }

    public function resize($image){
        require_once('classes/ImageResize.php');

        $img = new \Eventviva\ImageResize($image['tmp_name']);
        $img->resize(320, 240);
        $img->save('img/'. $image['name']);

        return true;
    }
}