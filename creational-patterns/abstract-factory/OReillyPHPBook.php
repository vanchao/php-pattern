<?php

include_once('AbstractPHPBook.php');

class OReillyPHPBook extends AbstractPHPBook{
    private $author;
    private $title;
    private static $oddOrEven = 'odd';

    public function __construct() {
        if('odd' == self::$oddOrEven) {
            $this->author = 'Rasmus Lerdorf And K Dash';
            $this->title = 'Programming the PHP';
            self::$oddOrEven = 'even';
        } else {
            $this->author = 'Kula And Adam';
            $this->title = 'The PHP Book';
            self::$oddOrEven = 'odd';
        }
    }

    public function getAuthor() {
        return $this->author;
    }

    public function getTitle() {
        return $this->title;
    }
}
