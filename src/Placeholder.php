<?php
namespace Coffee\Placeholder;

class Placeholder
{
    private $content;

    private $name;

    public function __construct($name) {
        $this->name = $name;
        $this->content = "";
    }

    public function captureStart() {
        ob_start();
    }

    public function captureEnd() {
        $this->content .= ob_get_clean();
    }

    public function getContent() {
        return $this->content;
    }
}