<?php
namespace Src\Api\Common;
class ControllerException extends \Exception
{
    public function __construct($message, $code=500){
        parent::__construct($message, $code);
        http_response_code($code);
    }
}