<?php

namespace parking\cars;

/**
 * Description of FreighCar
 *
 * @author tux
 */
class FreighCar extends Car
{
    public function getSpacesCount(): int
    {
        return 2;
    }
}
