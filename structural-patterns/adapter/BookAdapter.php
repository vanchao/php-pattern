<?php

include_once('SimpleBook.php');

class BookAdapter {
    private $book;

    public function __construct(SimpleBook $book) {
        $this->book = $book;
    }

    public function getAuthorAndTitle() {
        return "{$this->book->getTitle()} by {$this->book->getAuthor()}";
    }
}
