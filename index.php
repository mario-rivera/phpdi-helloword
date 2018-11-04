<?php
require_once __DIR__ . "/vendor/autoload.php";

$container = (new DI\ContainerBuilder())
->addDefinitions(__DIR__ . '/config/definitions.php')
->build();

$container->get(Rivera\Application::class)->run();