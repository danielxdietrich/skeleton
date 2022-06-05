<?php

require_once '../src/core/database.php';

class HomePage extends Controller
{
    private $model;

    function __construct()
    {
        session_start();

        $this->model = $this->load_model("model");
    }

    public function index()
    {
        $this->load_view('homepage/index');
    }
}
