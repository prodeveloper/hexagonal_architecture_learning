<?php

/**
 * Found in  the domain layer.
 * Tells the application layer how it handles commands
 *
 * Application layer has to impliment this to use domain layer
 * @author jacob
 */
interface HandlerInterface {
   function handle($command);
}
