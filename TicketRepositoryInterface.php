<?php

/**
 * Interfacing makes the persistence process a bit more testable
 * Philip brown from the cult has a nice blog about repositories
 * http://culttt.com/2014/09/08/benefits-using-repositories
 * @author jacob
 */
interface TicketRepositoryInterface {

    function getStaffOpenTickets(Staffer $staffer, $limit = 10);

    function save(Ticket $model);
}
