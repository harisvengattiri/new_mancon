<?php

namespace Mancon\Exceptions;

use Exception;

class SystemErrorException extends Exception {

    public function __construct() {
        parent::__construct('SYSTEM ERROR', 500);
    }
}
