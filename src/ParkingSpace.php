<?php

namespace parking\spaces;

/**
 * Description of ParkingSpaces
 *
 * @author tux
 */
class ParkingSpace
{
    
    protected $ticket;
    protected $car;
    
    public function __construct(\parking\cars\Car $car, \parking\Ticket $ticket)
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
