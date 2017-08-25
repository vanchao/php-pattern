<?php

include_once("Book.php");
include_once("BookList.php");

class BookListIterator {
    protected $bookList;
    protected $currentBook = 0;

    public function __construct(BookList $bookList_in){
        $this->bookList = $bookList_in;
    }

    public function getCurrentBook(){
        $condition1 = $this->currentBook > 0;
        $condition2 = $this->bookList->getBookCount() >= $this->currentBook;
        if($condition1 && $condition2){
            return $this->bookList->getBook($this->currentBook);
        }
    }

    public function getNextBook(){
        if($this->hasNextBook()){
            return $this->bookList->getBook(++$this->currentBook);
        }
        return null;
    }

    public function hasNextBook(){
        return $this->bookList->getBookCount() > $this->currentBook;
    }

}
