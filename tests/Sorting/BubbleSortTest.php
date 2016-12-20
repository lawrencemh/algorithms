<?php

use PHPUnit\Framework\TestCase;
require ('../../src/Sorting/BubbleSort.php');

class BubbleSortTest extends TestCase
{

    public function testArraySortedCorrectly1()
    {
        // init reverse array and sorted array
        $unsorted = [9,8,7,6,5,4,3,2,1];
        $sorted = [1,2,3,4,5,6,7,8,9];
        
        // init BubbleSort & call sort method
        $sort = new BubbleSort($unsorted);
        $sort->sort();
        
        // check sorted array matches expected sorted array from $sorted
        $this->assertJsonStringEqualsJsonString(
            json_encode($sorted),
            $sort->toString()
        );
    }
    
    
    
    public function testArraySortedCorrectly2()
    {
        // init random array and sorted array
        $unsorted = [2,7,6,5,9,4,8,3,1];
        $sorted = [1,2,3,4,5,6,7,8,9];
        
        // init BubbleSort & call sort method
        $sort = new BubbleSort($unsorted);
        $sort->sort();
        
        // check sorted array matches expected sorted array from $sorted
        $this->assertJsonStringEqualsJsonString(
            json_encode($sorted),
            $sort->toString()
        );
    }
    
    
    
    public function testArraySortedCorrectly3()
    {
        // init large array to sort to 1000 in reverse
        $unsorted = [];
        for ($i = 255; $i > 0; $i--)
        {
            $unsorted[] = $i;
        }
        $sorted = [];
        for ($i = 1; $i < 256; $i++)
        {
            $sorted[] = $i;
        }
        
        // init BubbleSort & call sort method
        $sort = new BubbleSort($unsorted);
        $sort->sort();
        
        // check sorted array matches expected sorted array from $sorted
        $this->assertJsonStringEqualsJsonString(
            json_encode($sorted),
            $sort->toString()
        );
    }

}
