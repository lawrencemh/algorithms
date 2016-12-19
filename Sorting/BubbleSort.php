<?php
/**
 * 
 * @author=Lawrence Howard
 * 
 */
 require('Sort.php');
 
 final class BubbleSort extends Sort
 {
    /**
     * @var Array $array
     */
     protected $array;
     
     
     
     
     /**
      * Handle construction of new instance
      * 
      * @param Array
      */
     public function __construct($array = array())
     {
         $this->array = $array;
     }
     
     
     
     
     /**
      * Sorts the array using BubbleSort
      */
     public function sort()
     {
         if ($this->isSorted != true)
         {
             echo "sorted\n";
             $this->isSorted = true;
         }
         else
         {
             echo "already sorted!\n";
         }
         
     }
     
 }
 
 // testing
 $t = new BubbleSort();
 $t->sort();
 echo $t->toString()."\n";
 $t->sort();