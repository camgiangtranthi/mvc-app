<?php

class Product extends Controller
{
    public $data = [];

    public function index()
    {
        echo "List product.";
    }

    public function listProduct()
    {
        $product = $this->model('ProductModel');
        $dataProduct = $product->getProductList();

        $this->data['product/list'] = $dataProduct;
        // render views
        $this->render('products/list', $this->data);
    }

    public function detail($id=0)
    {
        $product = $this->model('ProductModel');
        $this->data['info'] = $product->getDetail($id);
        $this->render('products/detail', $this->data);
    }
}