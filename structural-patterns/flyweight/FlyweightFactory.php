<?php

include_once('FlyweightBook.php');

class FlyweightFactory {
    private $books = array();

    public function __construct()
    {
        $this->books[1] = null;    
        $this->books[2] = null;    
        $this->books[3] = null;    
    }

    public function getBook($bookKey)
    {
        if (null == $this->books[$bookKey]) 
        {
            $makeFunction = "makeBook{$bookKey}";    
            $this->books[$bookKey] = $this->$makeFunction();
        }
        return $this->books[$bookKey];
    }

    public function makeBook1() {
      $book = new FlyweightBook('Larry Truett','PHP For Cats'); 
      return $book;
    }


    public function makeBook2() {
      $book = new FlyweightBook('Larry Truett','PHP For Dogs'); 
      return $book;
    }


    public function makeBook3() {
      $book = new FlyweightBook('Larry Truett','PHP For Parakeets'); return $book;
    }
}
