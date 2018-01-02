<?php

namespace parking\cars;

/**
 * Description of PassengerCar
 *
 * @author tux
 */
class PassengerCar extends Car
{
    
    public function getSpaceSize(): int
    {
        return 1;
    }
    
}
