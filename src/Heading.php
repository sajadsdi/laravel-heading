<?php

namespace Sajadsdi\LaravelHeading;

use Sajadsdi\DtoTool\DTO;

class Heading extends DTO
{
    public string $title       = '';
    public string $description = '';

    public function getTitle(): string
    {
        return env('APP_NAME') . $this->title ? " - " . $this->title : "";
    }
}
