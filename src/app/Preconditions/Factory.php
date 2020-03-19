<?php

namespace App\Preconditions;

use Illuminate\Support\Str;

class Factory
{
    public static function instance(?string $precondition)
    {
        $className = __NAMESPACE__ . '\\' . Str::studly($precondition);

        if (!class_exists($className)) {
            return null;
        }

        return new $className();
    }
}
