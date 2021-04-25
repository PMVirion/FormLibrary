# FormLibrary
[virion] A library implement FormAPI.

# Usage

- setup default Closure Parameter.
```php
function (Player $player, $data): void{}
````

> Make a CustomForm.
```php
FormLibrary::createCustomForm(Closure $closure, string $title);
```

> CustomForm Example.
```php
$form = FormLibrary::createCustomForm(function (Player $player, $data): void{
    $text = $data[0] ?? "";
    $bool = trim($text) !== "" and $player->getName();
    if ($bool) 
        $player->sendMessage("Matches your name.");
}, "CustomForm Library");
$form->addInput("Write Your Minecraft Nickname");
```

> Make a ButtonForm.
```php
FormLibrary::createButtonForm(Closure $closure, string $title);
```

> ButtonForm Example.
```php
$form = FormLibrary::createButtonForm(function (Player $player, $data): void{
    if (!is_null($data))
        $player->sendMessage("Select ButtonId: " . $data);
}, "ButtonForm Library");
$form->setContent("Select Button Id")
    ->addButton("ButtonId: 0")
    ->addButton("ButtonId: 1");
```

> Make a ModalForm.
```php
FormLibrary::createModalForm(Closure $closure, string $title);
```

> ModalForm Example.
```php
$form = FormLibrary::createModalForm(function (Player $player, $data): void{
    $bool = $data ? "True" : "False";
    $player->sendTitle($bool);
}, "ModalForm Library");
$form->setContent("Select Button")
    ->setButton1("True")
    ->setButton2("False");
```

> Player Send Form
```php
$player->sendForm($form);
```
