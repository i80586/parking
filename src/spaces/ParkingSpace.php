<?php

namespace parking\spaces;

/**
 * Description of ParkingSpaces
 *
 * @author tux
 */
abstract class ParkingSpace
{
    
    protected $ticket;
    protected $car;
    
    abstract public function __construct(cars\Car $car, Ticket $ticket);
    
    public function getCar()
    {
        return $this->car;
    }
    
    public function getTicket()
    {
        return $this->ticket;
    }
    
}
