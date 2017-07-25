<?php

include_once('Book.php');

class BookList {
    private $bookCount = 0;
    private $books = array();
    
    public function __construct(){
    }

    public function getBookCount(){
        return $this->bookCount;
    }

    private function setBookCount($newCount)
    {
        $this->bookCount = $newCount;
    }

    public function getBook($bookNumberToGet) 
    {
        if((is_numeric($bookNumberToGet)) && ($bookNumberToGet <= $this->getBookCount())) {
            return $this->books[$bookNumberToGet]; 
        } 
        return null;
    }

    public function addBook(Book $book){
        $this->setBookCount($this->getBookCount() + 1);
        $this->books[$this->getBookCount()] = $book;
        return $this->getBookCount();
    }

    public function removeBook(Book $book){
        $counter = 0;
        while (++$counter <= $this->getBookCount()) {
            if($book->getAuthorAndTitle() == $this->books[$counter]->getAuthorAndTitle())
            {
                for($x = $counter; $x < $this->getBookCount(); $x++) 
                {
                    $this->books[$x] = $this->books[$x + 1];
                }
            }
            $this->setBookCount($this->getBookCount() - 1);
        }
        return $this->getBookCount();
    }
}
