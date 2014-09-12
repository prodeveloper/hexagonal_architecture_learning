<?php

/**
 * Found in  the domain layer.
 * Tells the application layer how it executes commands
 * 
 * Application layer has to impliment this to use domain layer
 * @author jacob
 */
interface CommandBusInterface {

    function execute($command);
}
