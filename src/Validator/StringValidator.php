<?php

/*
 *  @author Serkin Akexander <serkin.alexander@gmail.com>
 */

namespace Volan\Validator;

class StringValidator extends AbstractValidator
{
    /**
     * Validate wether given data is string.
     *
     * @param mixed $nodeData
     *
     * @return bool
     */
    public function isValid($nodeData)
    {
        return (!empty($nodeData) && is_string($nodeData));
    }
}
