<?php

namespace api\exceptions;

use Exception;
use yii\web\HttpException;

/**
 * Class VMException.
 *
 * @package api\exceptions
 */
class VMException extends HttpException
{
    /**
     * Constructor.
     *
     * @param integer $status HTTP status code, such as 404, 500, etc.
     * @param string $message error message
     * @param integer $code error code
     * @param Exception $previous The previous exception used for the exception chaining.
     */
    public function __construct($status = 500, $message = null, $code = 0, Exception $previous = null)
    {
        parent::__construct($status, $message, $code, $previous);
    }
}
