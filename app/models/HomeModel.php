<?php 

class HomeModel 
{
    protected $table  = 'products';

    public function getList()
    {
        $data = [
            'Item1',
            'Item2',
            'Item3'
        ];
        return $data;
    }

    public function getDetails($id)
    {
        $data = [
            'Item1',
            'Item2',
            'Item3'
        ];

        return $data[$id];
    }
}