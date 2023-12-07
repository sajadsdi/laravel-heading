<?php

namespace Sajadsdi\LaravelHeading;

use ReflectionException;
use Sajadsdi\DtoTool\Concerns\DTOTrait;

class Heading
{
    use DTOTrait;
    protected array $config;

    private string $title;
    private string $description;
    private string $robots;

    /**
     * @throws ReflectionException
     */
    public function __construct()
    {
        $this->config = config('heading');
        $this->reset();
    }

    /**
     * @param $title
     * @return void
     */
    public function setTitle($title): void
    {
        if ($this->title) {
            $this->title .= " {$this->config['title_separator']} " . $title;
        } else {
            $this->title = $title;
        }
    }

    /**
     * @throws ReflectionException
     */
    public function reset()
    {
        $this->title = "";
        $this->description = "";
        $this->robots = "";
        $this->init($this->config);
    }
}
