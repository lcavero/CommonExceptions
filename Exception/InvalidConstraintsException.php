<?php

namespace LCV\CommonExceptions\Exception;

class InvalidConstraintsException extends ApiException
{
    protected $constraintsErrors;

    public function __construct($constraintsErrors = [],
                                $message = "Invalid constraints",
                                $translationParams = [],
                                \Exception $previous = null,
                                $statusCode = 400)
    {
        $this->constraintsErrors = $constraintsErrors;
        parent::__construct($statusCode, $message, $translationParams, $previous);
    }

    /**
     * @return array
     */
    public function getConstraintsErrors()
    {
        return $this->constraintsErrors;
    }


}
