<?php

require('SortInterface.php');

abstract class Sort implements SortInterface
{
    /**
     * @var Array $array
     */
     protected $array;
     
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
    
    
    /**
     * Swaps an array's values with another by key reference
     * 
     * @param int $key
     * @param int $key2
     * @return void
     */
     protected function arraySwap($k, $k1)
     {
         // swap keys in $this->array
         $tmp = $this->array[$k];
         $this->array[$k] = $this->array[$k1];
         $this->array[$k1] = $tmp;
         return true;
     }
     
     
     /**
     * Returns array in $this->array
     * @return Array
     */
    public function getArray()
    {
        if (!empty($this->array))
        {
            return $this->array;
        }
        
        // return false if $this->array empty
        return false;
    }
    
}