<?php

include_once('BookTitleDecorator.php');

class BookTitleExclaimDecorator extends BookTitleDecorator {
    private $btd;
    public function __construct(BookTitleDecorator $book)
    {
        $this->btd = $book;
    }

    public function exclaimTitle()
    {
        $this->btd->title = "! {$this->btd->title} !";
    }
}
