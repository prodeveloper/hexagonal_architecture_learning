<?php

/**
 *Logic needed by the domain layer
 * Application layer needs to provide this functionality to our
 * domain layer to use it
 * @author jacob
 */
interface Notifier {
    function send(Message $message);
}
