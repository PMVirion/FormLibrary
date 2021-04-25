<?php

namespace skh6075\formlibrary\form;

use Closure;

final class ModalForm extends Form{

    public function __construct(Closure $closure) {
        parent::__construct($closure);

        $this->encode["type"] = "modal";
    }

    public function setContent(string $content): self{
        $this->encode["content"] = $content;
        return $this;
    }

    public function setButton1(string $text): self{
        $this->encode["button1"] = $text;
        return $this;
    }

    public function setButton2(string $text): self{
        $this->encode["button2"] = $text;
        return $this;
    }
}