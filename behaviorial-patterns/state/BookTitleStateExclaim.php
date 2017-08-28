<?php

include_once("Book.php");
include_once("BookTitleStateInterface.php");
include_once("BookTitleStateStars.php");

class BookTitleStateExclaim implements BookTitleStateInterface{
    private $titleCount = 0;

    public function showTitle($context_in) {
        $title = $context_in->getbook()->gettitle();
        $this->titleCount++;
        $context_in->settitlestate(new BookTitleStateStars());
        return str_replace(" ", '!', $title);
    }
}
