<?php

include_once('AbstractPHPBook.php');

class SamsPHPBook extends AbstractPHPBook {
    private $author;
    private $title;

    public function __construct() {
        mt_srand((double)microtime()*10000000);
        $rand_num = mt_rand(0,1);

        if(1 > $rand_num) {
            $this->author = 'Tim Cook';
            $this->title = 'Master PHP';
        } else {
            $this->author = 'Chris Tina';
            $this->title = 'PHP Senior';
        }
    }

    public function getAuthor() {
        return $this->author;
    }

    public function getTitle() {
        return $this->title;
    }
}
