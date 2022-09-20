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

        $title = 'List product';

        $this->data['sub_content']['product_list'] = $dataProduct;
        $this->data['sub_content']['page_title'] = $title;
        $this->data['page_title'] = $title;
        $this->data['content'] = 'products/list';
        // render views
        $this->render('layouts/client_layout', $this->data);
    }

    public function detail($id=0)
    {
        $product = $this->model('ProductModel');
        $this->data['sub_content']['info'] = $product->getDetail($id);
        $this->data['sub_content']['page_title'] = 'Product details';
        $this->data['page_title'] = 'Product details';
        $this->data['content'] = 'products/detail';
        $this->render('layouts/client_layout', $this->data);
    }
}