<?php

include_once('AbstractMySQLBook.php');

class OReillyMySQLBook extends AbstractMySQLBook {
    private $author;
    private $title;

    public function __construct() {
        $this->author = 'Geese Howard, MI YAN, and Kim Kapawn';
        $this->title = 'Managing and Using MySQL';
    }
    
    public function getAuthor() {
        return $this->author;
    }

    public function getTitle() {
        return $this->title;
    }
}
