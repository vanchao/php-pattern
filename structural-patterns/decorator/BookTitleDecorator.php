<?php

include_once('Book.php');

class BookTitleDecorator {
    protected $book;
    protected $title;

    public function __construct(Book $book)
    {
        $this->book = $book;
        $this->resetTitle();
    }

    public function resetTitle()
    {
        $this->title = $this->book->getTitle();
    }

    public function showTitle()
    {
        return $this->title;
    }
}
