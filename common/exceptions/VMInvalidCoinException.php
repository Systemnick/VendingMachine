<?php

namespace common\exceptions;

use yii\base\Exception;

class VMInvalidCoinException extends Exception
{
    /**
     * Constructor.
     *
     * @param string $message error message
     * @param integer $code error code
     * @param Exception $previous The previous exception used for the exception chaining.
     */
    public function __construct($message = 'Coin is not recognized', $code = 10001, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
