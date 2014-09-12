<?php

/**
 * An example of a simplified command bus
 * Jeffrey way has a really nice laracast on this
 * https://laracasts.com/series/commands-and-domain-events
 *
 * @author jacob
 */
class SimpleCommandBus {
    function execute($command) {
        return $this->getHandler($command)->handle($command);
    }
}
