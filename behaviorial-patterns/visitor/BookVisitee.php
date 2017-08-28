<?php

include_once("Visitee.php");
include_once("Visitor.php");

class BookVisitee extends Visitee {
    private $author;
    private $title;

    public  function __construct($title_in, $author_in) {
        $this->author = $author_in;
        $this->title = $title_in;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function getTitle() {
        return $this->title;
    }

    public function accept(Visitor $visitorIn) {
        $visitorIn->visitBook($this);
    }
}
