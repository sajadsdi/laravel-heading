<?php

namespace Sajadsdi\LaravelHeading;

use Sajadsdi\DtoTool\DTO;

class Heading extends DTO
{
    private string $title       = '';
    private string $description = '';

    public function getTitle(): string
    {
        return config('app.name') . $this->title ? " - " . $this->title : "";
    }
}
