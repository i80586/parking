<?php

namespace parking\cars;

/**
 * Description of PassengerCar
 *
 * @author tux
 */
class PassengerCar extends Car
{
    
    public function getSpacesCount(): int
    {
        return 1;
    }
    
}
