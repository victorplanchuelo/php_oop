<?php

namespace RPG_Game;

class HtmlLogger implements Logger
{
    public function info($message)
	{
	    echo "<p>$message</p>";
	}
}
