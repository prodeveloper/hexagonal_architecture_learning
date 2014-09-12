<?php

/**
 *Application layer needs to provide this functionality to our
 * domain layer to use it
 * @author jacob
 */
interface Dispatcher {
    function dispatch(Array $events);
}
