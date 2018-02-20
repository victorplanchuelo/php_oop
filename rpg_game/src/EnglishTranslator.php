<?php

namespace RPG_Game;

class EnglishTranslator implements Translator
{
    protected $messages = [
        'BasicBowAttack' => ':unit shoot an arrow to :opponent',
        'BasicSwordAttack' => ':unit attack with the sword to :opponent',
        'CrossBowAttack' => ':unit shoot an arrow to :opponent',
        'FireBowAttack' => ':unit shoot a fire arrow to :opponent',
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
