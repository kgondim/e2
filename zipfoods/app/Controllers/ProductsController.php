<?php

namespace App\Controllers;

use App\Products;

class ProductsController extends Controller 
{
    
    private $productsObj;
    

    public function index()
    {
    $products = $this->app->db()->all('products');
    
    return $this->app->view('products/index', ['products' => $products]);
    }
   

    public function show()
    {
        
        $sku = $this->app->param('sku');

        if (is_null($sku)) {
            $this->app->redirect('/products');
        }
        
        $productQuery = $this->app->db()->findByColumn('products', 'sku', '=', $sku);
        
        if (empty($productQuery)) {
            return $this->app->view('products/missing');
        } else {
            $product = $productQuery[0];
        }

        $reviewSaved = $this->app->old('reviewSaved');

        $reviews = $this->app->db()->findByColumn('reviews', 'product_id', '=', $product['id']);

        return $this->app->view('products/show', [
            'product' => $product,
            'reviewSaved' => $reviewSaved,
            'reviews' => $reviews
        ]);
       
    }

    public function saveReview()
    {
        $this->app->validate([
            'sku' => 'required',
            'product_id' => 'required',
            'name' => 'required', # Note how multiple validation rules are separated by a |
            'review' => 'required|minLength:200' # Note that some rules accept paramaters, which follow a :
        ]);

        # If the above validation checks fail
        # user redirected back to where came from
        # None of code that follows will be executed
        $sku = $this->app->input('sku');
        $product_id = $this->app->input('product_id');
        $name = $this->app->input('name');
        $review = $this->app->input('review');

        $this->app->db()->insert('reviews', [
            'product_id' => $product_id,
            'name' => $name,
            'review' => $review
        ]);

        return $this->app->redirect('/product?sku=' . $sku, ['reviewSaved'=> true]);
        
    }

    public function new()
    {
        $productSaved = $this->app->old('productSaved');
        $sku = $this->app->old('sku');

        return $this->app->view('products/new', [
            'productSaved' => $productSaved,
            'sku' => $sku,
        ]);
    }

    public function save()
    {
        $this->app->validate([
            'name' => 'required',
            'sku' => 'required',
            'description' => 'required|alphaNumericDash',
            'price' => 'required|numeric',
            'available' => 'required|digit',
            'weight' => 'required|numeric',
            'perishable' => 'required'
        ]);

        $this->app->db()->insert('products', $this->app->inputAll());

        $this->app->redirect('/products/new', [
            'productSaved' => true,
            'sku' => $this->app->input('sku')
        ]);

    }
        
}