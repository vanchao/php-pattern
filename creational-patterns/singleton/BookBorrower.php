<?php

include_once('BookSingleton.php');

class BookBorrower{
    private $borrowedBook;
    private $haveBook = false;

    public function __construct(){
    }

    public function getAuthorAndTitle() {
        if(true == $this->haveBook) {
            return $this->borrowedBook->getAuthorAndTitle();
        } else {
            return "I do not have the book";
        }
    }

    public function borrowBook() {
        $this->borrowedBook = BookSingleton::borrowBook();
        if(null == $this->borrowedBook) {
            $this->haveBook = false;
        } else {
            $this->haveBook = true;
        }
    }

    public function returnBook() {
        $this->borrowedBook->returnBook($this->borrowedBook);
    }
}
