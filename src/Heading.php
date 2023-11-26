<?php

namespace Sajadsdi\LaravelHeading;

use Sajadsdi\DtoTool\Concerns\GetterSetter;

class Heading
{
    use GetterSetter;

    public string $title;
    public string $description;
}
