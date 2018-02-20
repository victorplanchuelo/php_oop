<?php

namespace RPG_Game;

class Translation
{
    protected static $translator;

    public static function setTranslator(Translator $translator)
    {
        static::$translator = $translator;
    }

    public static function translate($key, $params)
    {
        return static::$translator->translate($key, $params);
    }
}
