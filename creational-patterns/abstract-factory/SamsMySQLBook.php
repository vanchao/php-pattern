<?php

include_once('AbstractMySQLBook.php');

class SamsMySQLBook extends AbstractMySQLBook {
    private $author;
    private $title;

    public function __construct() {
        $this->author = 'Ted Swift';
        $this->title = 'MySQL, 4th Edition';
    }

    public function getAuthor() {
        return $this->author;
    }

    public function getTitle() {
        return $this->title;
    }
}
