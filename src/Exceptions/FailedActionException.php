<?php

namespace SimpleSquid\Vend\Exceptions;

use Exception;

class FailedActionException extends Exception
{
    /**
     * Create a new exception instance.
     *
     * @param  string  $message
     */
    public function __construct(string $message)
    {
        parent::__construct($message);
    }
}