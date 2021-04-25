<?php

namespace skh6075\formlibrary\form;

use Closure;

final class CustomForm extends Form{

    public function __construct(Closure $closure) {
        parent::__construct($closure);

        $this->encode["type"] = "custom_form";
        $this->encode["content"] = [];
    }

    public function addLabel(string $text): self{
        $this->encode["content"][] = ["type" => "label", "text" => $text];
        return $this;
    }

    public function addToggle(string $text, ?bool $default = null): self{
        $content = ["type" => "toggle", "text" => $text];
        if ($default !== null)
            $content["default"] = $default;

        $this->encode["content"][] = $content;
        return $this;
    }

    public function addSlider(string $text, int $min, int $max, int $step = -1, int $default = -1): self{
        $content = ["type" => "slider", "text" => $text, "min" => $min, "max", $max];
        if ($step !== -1)
            $content["step"] = $step;

        if ($default !== -1)
            $content["default"] = $default;

        $this->encode["content"][] = $content;
        return $this;
    }

    public function addStepSlider(string $text, array $steps = [], int $defaultIndex = -1): self{
        $content = ["type" => "step_slider", "text" => $text, "steps" => $steps];
        if ($defaultIndex !== -1)
            $content["default"] = $defaultIndex;

        $this->encode["content"][] = $content;
        return $this;
    }

    public function addDropdown(string $text, array $options, ?int $default = null): self{
        $content = ["type" => "dropdown", "text" => $text, "options" => $options];
        if ($default !== null)
            $content["default"] = $default;

        $this->encode["content"][] = $content;
        return $this;
    }

    public function addInput(string $text, string $placeholder = "", ?string $default = null): self{
        $content = ["type" => "input", "text" => $text, "placeholder" => $placeholder];
        if ($default !== null)
            $content["default"] = $default;

        $this->encode["content"][] = $content;
        return $this;
    }
}