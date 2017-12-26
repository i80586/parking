<?php

namespace parking;

/**
 * Description of ParkingSpaces
 *
 * @author tux
 */
class ParkingSpace
{

    private $ticket;
    private $car;
    
    public function __construct(cars\Car $car, Ticket $ticket)
    {
        $this->car = $car;
        $this->ticket = $ticket;
    }
    
    public function getCar()
    {
        return $this->car;
    }
    
    public function getTicket()
    {
        return $this->ticket;
    }
    
}
