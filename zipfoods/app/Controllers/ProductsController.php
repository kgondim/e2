<?php

namespace App\Controllers;

use App\Products;

class ProductsController extends Controller 
{
    
    private $productsObj;
    
    public function __construct($app)
    {
        parent::__construct($app);
        $this->productsObj = new Products($this->app->path('/database/products.json'));
    }

    public function index()
    {
        
        // dump($productsObj);
        # (global helper) dump and die
        // dd($productsObj);
        $products = $this->productsObj->getAll();
        
        // dd($products);
        // dump($this->app->path('/database/products.json'));
        return $this->app->view('products/index', ['products' => $products]);
        
    }

    public function show()
    {
        
        $sku = $this->app->param('sku');
        
        $productsObj = new Products($this->app->path('/database/products.json'));

        $product = $this->productsObj->getBySku($sku);

        if (is_null($product)) {
            return $this->app->view('products/missing');
        }
        
        return $this->app->view('products/show', ['product' => $product]);
    }       

    public function missing()
    {
        
    return $this->app->view('products/missing');

    }
        
   
}