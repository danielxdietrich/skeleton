<?php

class Controller
{
    protected function load_model($model)
    {
        require_once('../src/models/' . $model . '.php');
        return new $model();
    }

    protected function load_view($view)
    {
        require_once '../src/views/' . $view . '.php';
    }
}
