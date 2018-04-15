<?php

namespace api\exceptions;

/**
 * Class VMBusyException.
 *
 * @package api\exceptions
 */
class VMBusyException extends VMException
{
    /**
     * Constructor.
     *
     * @param string $message error message
     * @param integer $code error code
     * @param \Exception $previous The previous exception used for the exception chaining.
     */
    public function __construct($message = null, $code = 0, \Exception $previous = null)
    {
        parent::__construct(409, $message, $code, $previous);
    }
}
