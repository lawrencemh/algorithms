<?php

 require('Sort.php');
 
 final class BubbleSort extends Sort
 {
     /**
      * Handle construction of new instance
      * 
      * @param Array
      */
     public function __construct($array = array())
     {
         $this->setArray($array);
     }
     
     
     
     
     /**
      * Sorts the array using BubbleSort
      */
     public function sort()
     {
         // check array not already sorted
         if ($this->isSorted != true)
         {
             $this->bubbleSort();
         }
         
         return $this->isSorted;
     }
     
     
     
     
    /**
    * Bubblesort function
    */
    private function bubbleSort()
    {
        // check array is set or return false
        if (empty($this->array))
        {
            return false;
        }
        
        // init swaps counter & count array
        $sps = (int) 0;
        $n = count($this->array) - 1;
        
        // do until no changes made in previous iteration
        do 
        {
            // reset $sps
            $sps = 0;
            
            // loop through each value in array
            for ($i = 0; $i < $n; $i++)
            {
                // check if values[i] is higher than values[i+1] and swap if necessary
                if($this->array[$i] > $this->array[$i + 1])
                {
                    // swap values and increment changes
                    $this->arraySwap($i, $i+1);
                    $sps++;
                }
            }
            
            // decrement n (i.e. arr len) as far right value now sorted
            $n--;
        
        } while ($sps > 0);
        
        // change sorted status to true
        $this->isSorted = true;
    }
     
     
    
    
     
 }
 