<?php

namespace CodeInGame\CodeVsZombies;

class Debug
{
    public function __construct($item)
    {
        error_log(var_export($item, true));
    }
}
