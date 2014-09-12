<?php

/**
 * Defines dumb command object indicating that a user can create commands
 *
 * @author jacob
 */
class CreateTicketCommand {

    private $data;

    public function __construct($data) {        
        $this->data = $data;
    }
    function __get($property) {
        return $this->data[$property];
    }
}
