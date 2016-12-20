<?php

use PHPUnit\Framework\TestCase;
require ('../../src/Sorting/InsertionSort.php');

class InsertionSortTest extends TestCase
{

    public function testArraySortedCorrectly1()
    {
        // init reverse array and sorted array
        $unsorted = [9,8,7,6,5,4,3,2,1];
        $sorted = [1,2,3,4,5,6,7,8,9];
        
        // init InsertionSort & call sort method
        $sort = new InsertionSort($unsorted);
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
        
        // init InsertionSort & call sort method
        $sort = new InsertionSort($unsorted);
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
        
        // init InsertionSort & call sort method
        $sort = new InsertionSort($unsorted);
        $sort->sort();
        
        // check sorted array matches expected sorted array from $sorted
        $this->assertJsonStringEqualsJsonString(
            json_encode($sorted),
            $sort->toString()
        );
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testRejectsNonArray1()
    {
        // init large array to sort to 1000 in reverse
        $unsorted = 55;
        
        // check throws exception
        $sort = new InsertionSort($unsorted);
    }
    
    /**
     * @expectedException InvalidArgumentException
     */
    public function testRejectsNonArray2()
    {
        // init large array to sort to 1000 in reverse
        $unsorted = "Test string...";
        
        // check throws exception
        $sort = new InsertionSort($unsorted);
    }
    
    
    
    public function testSortMethod()
    {
        // init sort
        $sort = new InsertionSort([3,2,1]);
        
        // check $sort->sort() returns true
        $this->assertTrue($sort->sort());
        
    }



    public function testGetArrayMethod()
    {
        // init large array to sort to 1000 in reverse
        $arr = [1,2,5,4,6];

        // init InsertionSort
        $sort = new InsertionSort($arr);
        
        // check sorted array matches expected sorted array from $sorted
        $this->assertJsonStringEqualsJsonString(
            json_encode($arr),
            json_encode($sort->getArray())
        );
    }
}
