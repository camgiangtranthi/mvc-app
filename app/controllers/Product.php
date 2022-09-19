<?php

class Product extends Controller
{
    public function index()
    {
        echo "List product.";
    }

    public function listProduct()
    {
        $product = $this->model('ProductModel');
        $data = $product->getProductList();

        print_r($data);
    }
}