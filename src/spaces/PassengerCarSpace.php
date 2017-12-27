<?php

namespace parking\spaces;

/**
 * Description of PassengerCarSpace
 *
 * @author tux
 */
class PassengerCarSpace extends ParkingSpace
{
    
    public function __construct(cars\PassengerCar $car, Ticket $ticket)
    {
        $this->car = $car;
        $this->ticket = $ticket;
    }
    
}
