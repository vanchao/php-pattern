<?php

include_once('AbstractPHPBook.php');

class SamsPHPBook extends AbstractPHPBook {
    private $author;
    private $title;

    public function __construct()
    {
        mt_srand((double)microtime()*10000000);
        $rand_num = mt_rand(0,1);

        if(1 > $rand_num) {
            $this->author = 'Kevin Durant';
            $this->title = 'Advance PHP book';
        } else {
            $this->author = 'James Harden';
            $this->title = 'PHP Phrasebook';
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
