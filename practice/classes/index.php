<?php

require 'Catalog.php';

$person = new Person('John', 'Harvard', 45);
echo $person->firstName;
echo $person->getFullName();
echo $person->getClassification();
// $catalog = new Catalog('products.json');

// $product = $catalog->getById($_GET['productId']);
// $product = $catalog->getById(9);

// var_dump($catalog->products);
# same thing
// var_dump($catalog->getAll());

// var_dump($catalog->searchByName('ee'));

require 'index-view.php';