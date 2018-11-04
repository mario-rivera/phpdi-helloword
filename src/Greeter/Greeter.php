<?php
namespace Rivera\Greeter;

class Greeter implements GreeterInterface
{
    public function greet(): string
    {
        return 'Hello World';
    }
}