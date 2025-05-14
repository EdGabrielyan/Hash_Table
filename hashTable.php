<?php

class HashTable
{
    private array $table;

    private int $size;

    public function __construct(int $size = 13)
    {
        $this->size = $size;
        $this->table = array_fill(0, $size, []);
    }

    private function hashCode(string $key): int
    {
        $hash = 0;
        for ($i = 0; $i < strlen($key); $i++) {
            $hash = ($hash * 31 + ord($key[$i])) % $this->size;
        }
        return $hash;
    }

    public function set(string $key, mixed $value): void
    {
        $index = $this->hashCode($key);

        foreach ($this->table[$index] as &$pair) {
            if ($pair[0] === $key) {
                $pair[1] = $value;
                return;
            }
        }

        $this->table[$index][] = [$key, $value];
    }

    public function get(string $key): mixed
    {
        $index = $this->hashCode($key);
        foreach ($this->table[$index] as $pair) {
            if ($pair[0] === $key) {
                return $pair[1];
            }
        }
        return null;
    }

    public function remove(string $key): void
    {
        $index = $this->hashCode($key);
        foreach ($this->table[$index] as $i => $pair) {
            if ($pair[0] === $key) {
                array_splice($this->table[$index], $i, 1);
                return;
            }
        }
    }

    public function has(string $key): bool
    {
        $index = $this->hashCode($key);
        foreach ($this->table[$index] as $pair) {
            if ($pair[0] === $key) {
                return true;
            }
        }
        return false;
    }
}