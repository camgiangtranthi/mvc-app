<?php 

class Home
{
    public function index()
    {
        echo 'Hello World';
    }

    public function details($id='', $slug='')
    {
        echo $id . $slug;
    }

    public function search()
    {
        $keyword = $_GET['keyword'];
        echo $keyword;
    }
}