<?php

namespace Sajadsdi\LaravelHeading;

use Sajadsdi\DtoTool\DTO;

class Heading extends DTO
{
    protected string $title       = '';
    protected string $description = '';

    public function __construct()
    {
        $this->setTitle(config('app.name'));
    }

    public function setTitle($title):void
    {
        if($this->title){
            $this->title .= " - " . $title;
        }else{
            $this->title = $title;
        }
    }
}
