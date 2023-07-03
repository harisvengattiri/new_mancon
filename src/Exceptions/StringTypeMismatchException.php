<?php

namespace Mancon\Exceptions;

use Exception;

class StringTypeMismatchException extends Exception {

    public function __construct() {
        parent::__construct('STRING_TYPE_MISMATCH', 501);
    }
}
