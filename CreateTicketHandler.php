<?php

class CreateTicketHandler implements HandlerInterface {

    public function handle($command) {
        $this->validate($command); // Throw ValidationException	
        $this->save($command);
    }

    protected function save($command) {
        $ticket = new Ticket;
        /* Some other setters... */
        $ticket->setCategory($this->catRepo->find($command->category_id));
        $ticket->setStaffer($this->staffRepo->find($command->staffer_id));
        $ticket->addMessage($ticket->addMessage($command->message));

        $this->ticketRepo->save($ticket); // Use Repositories	

        $this->dispatcher->dispatch($ticket->flushEvents()); // Fire Events	
    }

}
