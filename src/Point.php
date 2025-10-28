<?php

namespace App;

class Point
{
    public function __construct(
        private float $x,
        private float $y
    ) {}
    
    // Перенос точки по оси X
    public function moveX(float $dx): void
    {
        $this->x += $dx;
    }
    
    // Перенос точки по оси Y
    public function moveY(float $dy): void
    {
        $this->y += $dy;
    }
    
    // Перенос точки на вектор
    public function moveByVector(Vector $vector): void
    {
        $this->x += $vector->getX();
        $this->y += $vector->getY();
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
        return "Point({$this->x}, {$this->y})";
    }
}
