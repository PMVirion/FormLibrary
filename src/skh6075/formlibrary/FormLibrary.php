<?php

namespace skh6075\formlibrary;

use Closure;
use skh6075\formlibrary\form\ButtonForm;
use skh6075\formlibrary\form\CustomForm;
use skh6075\formlibrary\form\ModalForm;

final class FormLibrary{

    public static function createCustomForm(Closure $closure, string $title = ""): CustomForm{
        return (new CustomForm($closure))->setTitle($title);
    }

    public static function createModalForm(Closure $closure, string $title = ""): ModalForm{
        return (new ModalForm($closure))->setTitle($title);
    }

    public static function createButtonForm(Closure $closure, string $title = ""): ButtonForm{
        return (new ButtonForm($closure))->setTitle($title);
    }
}