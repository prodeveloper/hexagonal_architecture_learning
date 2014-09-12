<?php

class TicketController extends BaseController {

    public function createTicket() {
        $command = new CreateTicketCommand(Input::all());

        try {
            $this->bus->execute($command);
        } catch (ValidationException $e) {
            return Redirect::to('/tickets/new')
                            ->withErrors($e->getErrors());
        } catch (DomainException $e) {
            return Redirect::to('/tickets/new')
                            ->withErrors($e->getErrors());
        }

        return Redirect::to('/tickets');
    }

}
