<?php

namespace Sajadsdi\LaravelHeading;

use Sajadsdi\DtoTool\DTO;

class Heading extends DTO
{
    protected string $title       = '';
    protected string $description = '';

    public function getTitle(): string
    {
        return config('app.name') . $this->title ? " - " . $this->title : "";
    }
}
