<?php

class Home extends Controller
{
    public function index($a = '', $b = '', $c = '')
    {   
        $model = new Model;
        $model->test();
        echo "This is home controller";
        $this->view('home');
    }
}
