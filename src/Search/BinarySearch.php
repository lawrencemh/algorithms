<?php
 require('Search.php');
 
 final class BinarySearch extends Search
 {
     /**
      * Init search class
      * 
      * @param Mixed $needle
      * @param Array $haystack
      */
      public function __construct($needle, $haystack)
      {
          $this->setArray($haystack);
          $this->setNeedle($needle);
      }
     
     
     
     
     /**
      * Carry out search
      * 
      * @return Boolean
      */
     public function search()
     {
         // check if already searched
         if (!$this->isSearched == TRUE)
         {
             $this->binarySearch(0, count($this->array) - 1);
         }
         
         // check a key is present in searchIndex and return true/false accordingly
         if ($this->isSearched == true && !is_null($this->searchIndex))
         {
             return true;
         }
         
         // fallback
         return false;
     }
     
     
     
     
     /**
      * BinarySearch function
      * 
      * @param int $lBound
      * @param int $hBound
      * @return Boolean
      */
      private function binarySearch($lBound, $hBound)
    {
        // get middle key index in range
        $mid = (int) ((($hBound - $lBound) / 2) + $lBound);

        // check if middle value == value
        if( $this->array[$mid] == $this->needle)
        {
            // needle found in haystack
            $this->isSearched = true;
            $this->searchIndex = $mid;
            return true;
        }
        else if ($lBound >= $hBound)
        {
            // checked last key in range return false as value wasn't found
            $this->isSearched = true;
            return false;
        }
        else if ($this->array[$mid] < $this->needle)
        {
            // search right half of range
            return $this->binarySearch($mid + 1, $hBound);
        }
        else
        {
            // search left half of range
            return $this->binarySearch($lBound, $mid - 1);
        }
    }
}
