<?php


interface SortInterface
{
    /**
      * Sorts the array using BubbleSort
      */
    public function sort();
    
    /**
     * Converts array to json formatted string
     * 
     * @return String
     */
     public function toString();
}