<?php

 require('Sort.php');
 
 final class InsertionSort extends Sort
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
             $this->InsertionSort();
         }
         
         return $this->isSorted;
     }
     
     
     
     
    /**
    * Insertionsort function
    * 
    * @return void
    */
    private function InsertionSort()
    {
        // check array is set or return false
        if (empty($this->array))
        {
            return false;
        }
        
        // get length of array
        $len = count($this->array);
        
        // loop through array from 1 to $len
        for ($i = 1; $i < $len; $i++)
        {
            // temp hold value
            $element = $this->array[$i];
            $j = $i;
            
            // loop through sorted half and shift j-1 with j until j-1 is lower than $element
            for ($j = $i; $j > 0; $j--)
            {
                if ($this->array[$j - 1] > $element)
                {
                    // shift j-1 to j i.e. shift value up array
                    $this->arraySwap($j, $j - 1);
                }
                elseif ($j == 0)
                {
                    // reached beginning of array, $element must be new smallest in sorted half
                    $this->array[$j] = $element;
                    break;
                }
                else 
                {
                    // element is greater than j-1 so set array[j] to element and move onto next i
                    $this->array[$j] = $element;
                    break;   
                }
            }
            
            //next $j-1 value is now lower than $element so put element in j
            $this->array[$j] = $element;
            
        }
        
        // change sorted status to true
        $this->isSorted = true;
    }
     
     
    
    
     
 }
