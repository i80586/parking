<?php

namespace parking;

use parking\spaces\ParkingSpace;

/**
 * Parking class
 */
class Parking
{
    
    private $parkingSpaces = [
        25 => [
            'size' => 2
        ],
        35 => [
            'size' => 1
        ],
        106 => [
            'size' => 1
        ]
    ];
    
    public function entrance(cars\Car $car): Ticket
    {        
        foreach ($this->parkingSpaces as $identifier => $space) {
            if (empty($space['took']) && $car->getSpaceSize() <= $space['size']) {
                $ticket = new Ticket($identifier);
                $this->parkingSpaces[$identifier]['took'] = new ParkingSpace($car, $ticket);
                
                return $ticket;
            }
        }
        
        throw new NoEmptySpaceException();
    }
    
    public function departure(Ticket $ticket)
    {
        if (!isset($this->parkingSpaces[$ticket->getIdentifier()])) {
            throw new SpaceNotFoundException();
        }
        
        unset($this->parkingSpaces[$ticket->getIdentifier()]['took']);
    }
    
}
