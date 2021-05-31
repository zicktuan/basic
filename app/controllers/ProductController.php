<?php

class ProductController extends BaseController {

    private $productModel;

    public function __construct()
    {
        $this->loadModel('ProductModel');
        $this->productModel = new ProductModel;
    }

    public function index() {
        $product = $this->productModel->getAll( 
            ['id', 'username'],
            [ 'column' => 'id', 'order' => 'desc' ],
        );

        $dataTitle = 'Nguyen Anh Tuan';
       
        return $this->view('admin.product.index', [
            'product' => $product,
            'dataTitle' => $dataTitle
        ]);
    }

    public function show() {
        $id = isset( $_GET['id'] ) ? $_GET['id'] : 0;

        $product = $this->productModel->getById( $id );

        print_r($product);
    }

    public function store() {
        $data = [
            'username' => 'admin3',
            'password' => md5('123456'),
            'email' => 'admin3@gmail.com',
            'status' => 1,
            'level' => 0,
            'created_time' => time()
        ];

        $this->productModel->store( $data );
    }
}