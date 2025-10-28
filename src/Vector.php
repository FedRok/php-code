<?php

namespace App;

class Vector
{
    public function __construct(
        private float $x,
        private float $y
    ) {}
    
    // Вычисление длины вектора
    public function getLength(): float
    {
        return sqrt($this->x ** 2 + $this->y ** 2);
    }
    
    // Проверка на нулевой вектор
    public function isZero(): bool
    {
        return abs($this->x) < PHP_FLOAT_EPSILON && 
               abs($this->y) < PHP_FLOAT_EPSILON;
    }
    
    // Проверка перпендикулярности через скалярное произведение
    public function isPerpendicularTo(Vector $other): bool
    {
        $dotProduct = $this->x * $other->x + $this->y * $other->y;
        return abs($dotProduct) < PHP_FLOAT_EPSILON;
    }
    
    public function getX(): float
    {
        return $this->x;
    }
    
    public function getY(): float
    {
        return $this->y;
    }
    
    public function __toString(): string
    {
        return "Vector({$this->x}, {$this->y})";
    }
}
