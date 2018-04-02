<?php

namespace NtimYeboah\LaravelDatabaseTrigger;

use Illuminate\Support\Facades\Facade;

class TriggerFacade extends Facade
{
    /**
     * Get a schema builder instance for the default connection.
     *
     * @return \NtimYeboah\LaravelDatabaseTrigger\Schema\MySqlBuilder
     */
    protected static function getFacadeAccessor()
    {
        return 'trigger-builder';
    }
}