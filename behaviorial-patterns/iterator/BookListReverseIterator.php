<?php
include_once("BookListIterator.php");

class BookListReverseIterator extends BookListIterator{
    public function __construct(BookList $bookList_in){
        $this->bookList = $bookList_in;
        $this->currentBook = $this->bookList->getBookCount() + 1;
    }

    public function getNextBook(){
        if($this->hasNextBook()){
            return $this->bookList->getBook(--$this->currentBook);
        }
        return null;
    }

    public function hasNextBook(){
        return 1 < $this->currentBook;
    }
}
