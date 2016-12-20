<?php

 require('Sort.php');
 
 final class SelectionSort extends Sort
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
      * 
      * @return Boolean
      */
     public function sort()
     {
         // check array not already sorted
         if ($this->isSorted != true)
         {
             $this->selectionSort();
         }
         
         return $this->isSorted;
     }
     
     
     
     
    /**
    * Selectionsort function
    * 
    * @return Void
    */
    private function selectionSort()
    {
        // check array is set or return false
        if (empty($this->array))
        {
            return false;
        }
        
        // get len and init $smlKey to 0
        $len = count($this->array);
        $smlKey = 0;
        
        // loop through list with $i being the end of the sorted section
        for ($i = 0; $i < $len; $i++)
        {
            //loop through unsorted section
            for ($j = $i, $smlKey = $i; $j < $len; $j++)
            {
                // check if array[$j] is smaller than $smlKey
                if ($this->array[$j] < $this->array[$smlKey])
                {
                    $smlKey = $j;
                }
            }
            
            // swap smallest with $i
            $this->arraySwap($i, $smlKey);
        }
        
        // change sorted status to true
        $this->isSorted = true;
    }
     
     
    
    
     
 }
 