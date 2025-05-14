<?php

require_once 'hashTable.php';

$hashTable = new HashTable(10);

$hashTable->set('name', 'Alice');
$hashTable->set('age', 30);
$hashTable->set('city', 'Paris');

echo $hashTable->get('name');
echo "\n";
echo $hashTable->has('age') ? 'Yes' : 'No';
echo "\n";
$hashTable->remove('age');
echo $hashTable->has('age') ? 'Yes' : 'No';
echo "\n";
