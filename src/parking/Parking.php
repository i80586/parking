<?php

namespace parking;

/**
 * Parking class
 */
class Parking
{
    
    private $parkingSpaces = [];
    
    public function entrance(cars\Car $car): Ticket
    {
        $ticket = new Ticket(25);
        
        $parkingSpace = ($car->getSpacesCount() > 1) 
                        ? new spaces\FreighCarSpace($car, $ticket)
                        : new spaces\PassengerCarSpace($car, $ticket);
        
        $this->parkingSpaces[$ticket->getIdentifier()] = $parkingSpace;
        
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
