<?php

namespace parking;

/**
 * Description of Parking
 *
 * @author tux
 */
class Parking
{
    
    private $parkingSpaces = [];
    
    public function entrance(cars\Car $car): Ticket
    {
        $ticket = new Ticket(25);
        $this->parkingSpaces[$ticket->getIdentifier()] = new ParkingSpace($car, $ticket);
        
        return $ticket;
    }
    
    public function departure(integer $spaceNumber)
    {
        if (!isset($this->parkingSpaces[$spaceNumber])) {
            throw new SpaceNotFoundException();
        }
        
        unset($this->parkingSpaces[$spaceNumber]);
    }
    
}
