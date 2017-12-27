<?php

namespace parking\spaces;

/**
 * Description of PassengerCarSpace
 *
 * @author tux
 */
class PassengerCarSpace extends ParkingSpace
{
    
    public function __construct(\parking\cars\PassengerCar $car, \parking\Ticket $ticket)
    {
        $this->car = $car;
        $this->ticket = $ticket;
    }
    
}
