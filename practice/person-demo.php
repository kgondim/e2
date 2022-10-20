<?php

require 'Person.php';

$person = new Person('John', 'Harvard', 45);

echo $person->firstName;
echo $person->getFullName();
echo $person->getClassification();