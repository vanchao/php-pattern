<?php

include_once('AbstractPHPBook.php');

class OReillyPHPBook extends AbstractPHPBook{
    private $author;
    private $title;

    private static $oddOrEven = 'odd';

    public function __construct()
    {
        if('odd' === self::$oddOrEven) {
            $this->author = 'Rasums And Kevin';
            $this->title = 'Programming PHP';
            self::$oddOrEven = 'even';
        } else {
            $this->author = 'Dick And Mary';
            $this->title = 'PHP Cookbook';
            self::$oddOrEven = 'odd';
        }
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getTitle()
    {
        return $this->title;
    }
}
