<?php

namespace Sajadsdi\LaravelHeading;

use Sajadsdi\DtoTool\Concerns\DTOTrait;

class Heading
{
    use DTOTrait;
    protected array $config;

    private string $title       = '';
    private string $description = '';
    private string $robots      = '';

    /**
     * @throws \ReflectionException
     */
    public function __construct(array $config)
    {
        $this->config = $config;
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
     * @throws \ReflectionException
     */
    public function reset()
    {
        $this->init($this->config);
    }
}
