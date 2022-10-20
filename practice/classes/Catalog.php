<?php


class Catalog 
{
 # properties
    public $products = [];

# methods
    public function __construct($dataSource)
    {
        # Load the JSON string of data
        $json = file_get_contents($dataSource);
        # Convert the JSON string into an array
        $this->products = json_decode($json, true);
       
    }

    public function getAll()
    {
        return $this->products;
    }
    public function getById(int $id)
    {
       
        return $this->products[$id];
    }
    public function searchByName(string $term) 
    {
        $results = [];
        foreach($this->products as $product) {
            if(strstr($product['name'], $term)) {
                $results[] = $product;
            }
        }

        return $results;
    }
}