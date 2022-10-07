<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\Product;

class ProductController extends BaseController {
    public function getProducts() {
        // Hiển thị danh sách sản phẩm bằng render() của BladeOne
        // file view ở new-mvc/App/Views/product/index.blade.php
        $viewName = 'product.listProduct';
        // data view cần biến $name và $price
        $data = [
            'arr' => [
                [
                'id' => 1,
                'name' => 'iphone14',
                'price' => 32000000,
                'quantity' => 100,
                'img' => 'photo1.png'
            ],
            [
                'id' => 2,
                'name' => 'SamSung S22',
                'price' => 22000000,
                'quantity' => 100,
                'img' => 'photo2.png'
            ],
            [
                'id' => 3,
                'name' => 'Oppo',
                'price' => 18000000,
                'quantity' => 100,
                'img' => 'photo3.png'
            ]
            ]
        ];

        return $this->render($viewName, $data);
    }
    public function getProductsDetail($id) {
        // Hiển thị danh sách sản phẩm bằng render() của BladeOne
        // file view ở new-mvc/App/Views/product/index.blade.php
        $viewName = 'product.list';
        // data view cần biến $name và $price
        $data = [
                [
                'id' => 1,
                'name' => 'iphone14',
                'price' => 32000000,
                'quantity' => 100
            ],
            [
                'id' => 2,
                'name' => 'SamSung S22',
                'price' => 22000000,
                'quantity' => 100
            ],
            [
                'id' => 3,
                'name' => 'Oppo',
                'price' => 18000000,
                'quantity' => 100
            ]
        ];
        foreach($data as $key){
            if($key['id'] == $id){
                $data = $key;
            }
        }

        return $this->render($viewName, $data);
    }
    public function addProduct() {
        // Hiển thị danh sách sản phẩm bằng render() của BladeOne
        // file view ở new-mvc/App/Views/product/index.blade.php
        $viewName = 'product.add';
        // data view cần biến $name và $price
        $data = [];

        return $this->render($viewName, $data);
    }
    public function index() {
        // Hiển thị danh sách sản phẩm bằng render() của BladeOne
        // file view ở new-mvc/App/Views/product/index.blade.php
        $viewName = 'product.index';
        // data view cần biến $name và $price
        $data = [];

        return $this->render($viewName, $data);
    }
}

