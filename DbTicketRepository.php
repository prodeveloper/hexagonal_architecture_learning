<?php

class DbTicketRepository implements RepositoryInterface {

    public function getStaffOpenTickets(Staffer $staffer, $limit = 10) {
        return $this->ticket->where('staff_id', $staffer->id)
                        ->take($limit)->get();
    }

    public function save(Ticket $ticket) {
        $ticket->save();
    }

}
