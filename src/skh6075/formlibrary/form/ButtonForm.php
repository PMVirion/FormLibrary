<?php

namespace skh6075\formlibrary\form;

use Closure;

final class ButtonForm extends Form{

    public function __construct(Closure $closure) {
        parent::__construct($closure);

        $this->encode["type"] = "form";
        $this->encode["buttons"] = [];
    }

    public function setContent(string $content): self{
        $this->encode["content"] = $content;
        return $this;
    }

    public function addButton(string $text, ?string $imagePath = null): self{
        $content = ["text" => $text];
        if ($imagePath !== null) {
            $content["image"]["type"] = "url";
            $content["image"]["data"] = $imagePath;
        }

        $this->encode["buttons"][] = $content;
        return $this;
    }
}