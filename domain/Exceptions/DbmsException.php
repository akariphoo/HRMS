<?php

namespace Domain\Exceptions;

use Exception;

class DbmsException extends Exception
{
    public $code;

    public $logMessage;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(string $code, string $logMessage = null)
    {
        $this->code = $code;
        $this->logMessage = $logMessage;
    }
}