<?php

namespace App;

class MagicClass
{
    private array $data = [];
    
    public function __construct()
    {
        echo "__construct called\n";
    }
    
    public function __destruct()
    {
        echo "__destruct called\n";
    }
    
    public function __get(string $name)
    {
        echo "__get called for property: $name\n";
        return $this->data[$name] ?? null;
    }
    
    public function __set(string $name, $value): void
    {
        echo "__set called for property: $name\n";
        $this->data[$name] = $value;
    }
    
    public function __isset(string $name): bool
    {
        echo "__isset called for property: $name\n";
        return isset($this->data[$name]);
    }
    
    public function __unset(string $name): void
    {
        echo "__unset called for property: $name\n";
        unset($this->data[$name]);
    }
    
    public function __call(string $name, array $arguments)
    {
        echo "__call called for method: $name\n";
        return null;
    }
    
    public static function __callStatic(string $name, array $arguments)
    {
        echo "__callStatic called for method: $name\n";
        return null;
    }
    
    public function __toString(): string
    {
        return "__toString called\n";
    }
    
    public function __invoke()
    {
        echo "__invoke called\n";
    }
    
    public function __clone()
    {
        echo "__clone called\n";
    }
    
    public function __sleep(): array
    {
        echo "__sleep called\n";
        return ['data'];
    }
    
    public function __wakeup(): void
    {
        echo "__wakeup called\n";
    }
}
