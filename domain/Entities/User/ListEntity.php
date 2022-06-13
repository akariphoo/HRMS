<?php

namespace Domain\Entities\User;

use stdClass;

class ListEntity
{
    public string $name;

    public string $email;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private function __construct()
    {
        //
    }

    public static function createInstance($item)
    {
        $newInstance = new ListEntity();
        $newInstance->id = $item->id;
        $newInstance->name = $item->name;
        $newInstance->email = $item->email;

        return $newInstance;
    }
}