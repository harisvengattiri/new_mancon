<?php

namespace Mancon\Exceptions;

use Exception;

class IntTypeMismatchException extends Exception {

    public function __construct() {
        parent::__construct('INT_TYPE_MISMATCH', 502);
    }
}
