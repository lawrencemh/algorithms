<?php
 require('Search.php');
 
 final class LinearSearch extends Search
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
             $this->linearSearch();
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
      * LinearSearch function
      * 
      * @return Boolean
      */
      private function linearSearch()
      {
          // get array size
          $arrSize = count($this->array);
          
          for ($i = 0; $i < $arrSize; $i++)
          {
              // check if arr[$i] == $needle
              if($this->needle == $this->array[$i])
              {
                  // match. Set needle and return true;
                  $this->searchIndex = $i;
                  
                  $this->isSearched = true;
                  return true;
              }
          }
          
          // needle not found
          return false;
      }
 }
 