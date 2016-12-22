<?php
require('SearchInterface.php');

abstract class Search implements SearchInterface
{
    /**
    * @var Array $array
    */
    protected $array;
    
    /**
     * @var Int $needle
     */
     protected $needle;
     
    /**
    * @var Boolean $isSearched
    */
    protected $isSearched = false;
    
    /**
     * @var int $searchIndex
     */
     protected $searchIndex = null;
    
    /**
     * Validate and set the array parameter on __construct
     * 
     * @param Array $array
     * @return Boolean
     */
     protected function setArray(&$array)
     {
         if (is_array($array))
         {
            $this->array = $array;
            return true;
         }
         else
         {
             // non-array passed to constructor throw exception
             throw new InvalidArgumentException('ArrayExpectedAsParameter');
         }
     }
     
     /**
      * Validate and set needle to search for
      * 
      * @param Mixed $needle
      * @return Boolean
      */
      protected function setNeedle(&$needle)
      {
          if (!empty($needle) && !is_array($needle))
          {
              $this->needle = $needle;
          }
          else
          {
              // no param set or $needle is array
              throw new InvalidArgumentException('NeedleExpectedAsParameter');
          }
      }
     
     /**
      * Returns array key where value found if search has been
      * conducted.
      * 
      * @return Mixed
      */
     public function getSearchIndex()
     {
         if (!is_null($this->searchIndex))
         {
             return $this->searchIndex;
         }

         // not found or search not run yet
         return false;
     }
     
}