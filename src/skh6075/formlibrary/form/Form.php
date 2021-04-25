<?php

namespace skh6075\formlibrary\form;

use pocketmine\form\Form as PMForm;
use Closure;
use pocketmine\player\Player;
use pocketmine\utils\Utils;

class Form implements PMForm{

    protected array $encode = [];

    protected Closure $decode;

    public function __construct(Closure $closure) {
        Utils::validateCallableSignature(function (Player $player, $data): void{}, $closure);
        $this->decode = $closure;

        $this->encode["title"] = "FormLibrary";
    }

    public function getClosure(): Closure{
        return $this->decode;
    }

    public function jsonSerialize(): array{
        return $this->encode;
    }

    public function handleResponse(Player $player, $data): void{
        ($this->decode)($player, $data);
    }

    public function setTitle(string $title): self{
        $this->encode["title"] = $title;
        return $this;
    }
}