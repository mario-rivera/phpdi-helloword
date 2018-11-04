<?php
namespace Rivera;

use Psr\Container\ContainerInterface;
use Rivera\Greeter\GreeterInterface;

class Application
{
    protected $container;
    protected $greeter;

    public function __construct(ContainerInterface $c, GreeterInterface $g)
    {
        $this->container = $c;
        $this->greeter = $g;
    }

    public function run()
    {
        echo $this->greeter->greet() . PHP_EOL;
    }
}