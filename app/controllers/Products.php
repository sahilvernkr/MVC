<?php
class Products
{
    use Controller;

    public function index($a = '', $b = '', $c = '')
    {
        $this->view('products/products');
    }
}
