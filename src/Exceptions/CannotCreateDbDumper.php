<?php

namespace Spatie\Backup\Exceptions;

use Exception;

class CannotCreateDbDumper extends Exception
{
    public static function unsupportedDriver(string $driver): CannotCreateDbDumper
    {
        return new static("Cannot create a dumper for db driver `{$driver}`. Use `mysql`, `pgsql` or `sqlite`.");
    }
}
