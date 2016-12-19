<?php

require('SortInterface.php');

abstract class Sort implements SortInterface
{
    /**
     * @var Boolean $isSorted
     */
    protected $isSorted = false;
    
    
    
    /**
     * Converts array to json formatted string
     * 
     * @return String
     */
    public function toString()
    {
        // if array is set return json encoded array
        if (!empty($this->array))
        {
            return json_encode($this->array);
        }
        
        // array not set yet
        return false;
    }
    
    
}