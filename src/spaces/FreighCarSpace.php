<?php

namespace parking\spaces;

/**
 * Description of FreighCarSpace
 *
 * @author tux
 */
class FreighCarSpace extends ParkingSpace
{
    
    public function __construct(cars\FreighCar $car, Ticket $ticket)
    {
        $this->car = $car;
        $this->ticket = $ticket;
    }
    
}
