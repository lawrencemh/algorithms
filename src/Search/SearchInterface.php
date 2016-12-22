<?php

interface SearchInterface
{
    /**
      * Returns array key where value found if search has been
      * conducted.
      * 
      * @return Mixed
      */
     public function getSearchIndex();
     
     /**
      * Carry out search
      * 
      * @return Boolean
      */
      public function search();
}