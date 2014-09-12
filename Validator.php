<?php

/**
 *Application layer needs to provide this functionality to our
 * domain layer to use it
 * @author jacob
 */
interface Validator {
    function passes(Array $data);
    function getErrors();
}
