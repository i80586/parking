<?php

namespace parking;

/**
 * Description of Ticket
 *
 * @author tux
 */
class Ticket
{
    
    private $identifier;
    
    public function __construct(int $identifier)
    {
        $this->identifier = $identifier;
    }
    
    public function getIdentifier(): int
    {
        return $this->identifier;
    }
    
}
