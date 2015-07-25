<?php
namespace MiniGame\Exceptions;

use Exception;

class IllegalOptionException extends \Exception
{
    /**
     * @var $string
     */
    private $optionName;

    /**
     * @var mixed
     */
    private $optionValue;

    /**
     * Constructor
     *
     * @param string     $message
     * @param int        $optionName
     * @param mixed      $optionValue
     * @param int        $code
     * @param \Exception $previous
     */
    public function __construct($message, $optionName, $optionValue, $code = 0, \Exception $previous = null)
    {
        $this->optionName = $optionName;
        $this->optionValue = $optionValue;
        parent::__construct($message, $code, $previous);
    }

    /**
     * @return string
     */
    public function getOptionName()
    {
        return $this->optionName;
    }

    /**
     * @return mixed
     */
    public function getOptionValue()
    {
        return $this->optionValue;
    }
}
