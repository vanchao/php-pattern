<?php

include_once("Book.php");
include_once("BookTitleStateStars.php");

class BookContext {
    private $book = null;
    private $bookTitleState = null;

    public function __construct($book_in) {
        $this->book = $book_in;
        $this->setTitleState(new BookTitleStateStars());
    }

    public function getBookTitle() {
        return $this->bookTitleState->showTitle($this);
    }

    public function getBook() {
        return $this->book;
    }

    public function setTitleState($titleState_in) {
        $this->bookTitleState = $titleState_in;
    }
}
