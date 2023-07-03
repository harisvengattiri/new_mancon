<?php

namespace Mancon\Exceptions;

use Exception;

class AlreadyExistsException extends Exception {

    public function __construct() {
        parent::__construct('ALREADY EXISTS', 502);
    }
}
