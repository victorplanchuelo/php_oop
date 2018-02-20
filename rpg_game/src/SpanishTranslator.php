<?php

namespace RPG_Game;

class SpanishTranslator implements Translator
{
    protected $messages = [
        'BasicBowAttack' => ':unit dispara una flecha a :opponent',
        'BasicSwordAttack' => ':unit ataca con la espada a :opponent',
        'CrossBowAttack' => ':unit dispara una flecha a :opponent',
        'FireBowAttack' => ':unit dispara una flecha de fuego a :opponent',
    ];

    public function translate($key, $params)
    {
        if (! $this->has($key)) {
            return "[$key]";
        }

        return $this->replaceParams($this->messages[$key], $params);
    }

    protected function has($key)
    {
        return isset($this->messages[$key]);
    }

    protected function replaceParams($message, array $params)
    {
        foreach ($params as $key => $value) {
            $message = str_replace(":$key", $value, $message);
        }

        return $message;
    }
}
