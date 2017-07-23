<?php

include_once('AbstractPHPBook.php');

class VisualQuickstartPHPBook extends AbstractPHPBook {
    private $author;
    private $title;

    public function __construct()
    {
        $this->author = 'Larry Ullman';
        $this->title = 'PHP for www';
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
