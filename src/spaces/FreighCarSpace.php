<?php

namespace parking\spaces;

/**
 * Description of FreighCarSpace
 *
 * @author tux
 */
class FreighCarSpace extends ParkingSpace
{
    
    public function __construct(\parking\cars\FreighCar $car, \parking\Ticket $ticket)
    {
        $this->car = $car;
        $this->ticket = $ticket;
    }
    
}
