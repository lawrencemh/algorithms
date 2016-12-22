<?php

use PHPUnit\Framework\TestCase;
require ('../../src/Search/LinearSearch.php');

class LinearSearchTest extends TestCase
{
    public function testKeyIsFoundInArray1()
    {
        // init search
        $arr = [1,2,3,4,5,6,7,8,9];
        $keyToFind = 2;
        $search = new LinearSearch(3, $arr);
        
        // do search
        $search->search();
        
        // check keys match
        $this->assertEquals($keyToFind, $search->getSearchIndex());
    }
    
    public function testKeyIsFoundInArray2()
    {
        // init search
        $arr = [9,10,15,16,20,28];
        $keyToFind = 0;
        $search = new LinearSearch(9, $arr);
        
        // do search
        $search->search();
        
        // check keys match
        $this->assertEquals($keyToFind, $search->getSearchIndex());
    }
    
    public function testKeyIsFoundInArray3()
    {
        // init search
        $arr = [9,10,15,16,20,28];
        $keyToFind = 5;
        $search = new LinearSearch(28, $arr);
        
        // do search
        $search->search();
        
        // check keys match
        $this->assertEquals($keyToFind, $search->getSearchIndex());
    }
    
    public function testKeyIsNotFoundInArray1()
    {
        // init search
        $arr = [9,10,15,16,20,28];
        $search = new LinearSearch(14, $arr);
        
        // do search
        $search->search();
        
        // check keys match
        $this->assertFalse($search->getSearchIndex());
    }
    
    public function testKeyIsNotFoundInArray2()
    {
        // init search
        $arr = [9,10,15,16,20,28];
        $search = new LinearSearch(30, $arr);
        
        // do search
        $search->search();
        
        // check keys match
        $this->assertFalse($search->getSearchIndex());
    }
    
    public function testKeyIsNotFoundInArray3()
    {
        // init search
        $arr = [9,10,15,16,20,28];
        $search = new LinearSearch(5, $arr);
        
        // do search
        $search->search();
        
        // check keys match
        $this->assertFalse($search->getSearchIndex());
    }
    
    public function testSearchReturnsTrue()
    {
        // init search
        $arr = [9,10,15,16,20,28];
        $search = new LinearSearch(16, $arr);
        
        $this->assertTrue($search->search());
    }
    
    /**
     * @expectedException InvalidArgumentException
     */
    public function testRejectsSwappedParameters()
    {
        // check exception if $needle and $array accidently passed in wrong order
        $arr = [9,10,15,16,20,28];
        $search = new LinearSearch($arr, 16);
    }
    
    /**
     * @expectedException InvalidArgumentException
     */
    public function testRejectsNonArray()
    {
        // check exception if passed int instead of array for param 2
        $search = new LinearSearch(16, 16);
    }
    
    /**
     * @expectedException InvalidArgumentException
     */
    public function testRejectsNonInt()
    {
        // check exception if passed int instead of array for param 2
        $search = new LinearSearch([1,2], [1,2,3]);
    }
}