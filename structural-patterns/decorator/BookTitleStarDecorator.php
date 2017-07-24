<?php

include_once('BookTitleDecorator.php');

class BookTitleStarDecorator extends BookTitleDecorator {
    private $btd;

    public function __construct(BookTitleDecorator $book)
    {
        $this->btd = $book;
    }

    public function starTitle()
    {
        $this->btd->title = str_replace(" ", "*", $this->btd->title);
    }
}
