<?php


// class Catalog 
// {
//  # properties
//     public $products = [];

// # methods
//     public function __construct($dataSource)
//     {
//         # Load the JSON string of data
//         $json = file_get_contents($dataSource);
//         # Convert the JSON string into an array
//         $this->products = json_decode($json, true);
       
//     }

//     public function getAll()
//     {
//         return $this->products;
//     }
//     public function getById(int $id)
//     {
       
//         return $this->products[$id];
//     }
//     public function searchByName(string $term) 
//     {
//         $results = [];
//         foreach($this->products as $product) {
//             if(strstr($product['name'], $term)) {
//                 $results[] = $product;
//             }
//         }

//         return $results;
//     }
// }

class Person
{
    public string $firstName = '';
    public string $lastName = '';
    public int $age;

    public function __construct($firstName, $lastName, $age) 
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;

    }
    public function getFullName()
    {
        return $this->firstName ." ". $this->lastName;
    }

    public function getClassification($age)
    {
        if($this->age >= 18){
            return 'adult';
        } else {
            return 'minor';
        }
    }

  

}