<?php

class HashTable
{
    // Storage array
    private array $table;

    // Size of the hash table (optional)
    private int $size = 7;

    // Constructor to initialize the table
    public function __construct(int $size = 100)
    {
        // Initialize table and size
    }

    // Hash function to convert key to index
    private function hashCode(string $key): int
    {
        $hash = 0;
        for ($i = 0; $i < strlen($key); $i++) {
            $hash = ($hash * 31 + ord($key[$i])) % $this->size;
        }
        return $hash;
    }

    // Set a key-value pair
    public function set(string $key, mixed $value): void
    {
        // Add key-value to the table
    }

    // Get a value by key
    public function get(string $key)
    {
        // Retrieve value by key
    }

    // Remove a key-value pair
    public function remove(string $key): void
    {
        // Remove key from table
    }

    // Check if a key exists
    public function has(string $key)
    {
        // Return true if key exists
    }
}