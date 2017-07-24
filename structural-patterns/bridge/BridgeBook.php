<?php

include_once('BridgeBookCapsImp.php');
include_once('BridgeBookStarsImp.php');

abstract class BridgeBook {
    private $bbAuthor;
    private $bbTitle;
    private $bbImp;

    public function __construct($author, $title, $choice) {
        $this->bbAuthor = $author;
        $this->bbTitle = $title;
        if('STARS' == $choice) {
            $this->bbImp = new BridgeBookStarsImp();
        } else {
            $this->bbImp = new BridgeBookCapsImp();
        }
    }

    public function showAuthor()
    {
        return $this->bbImp->showAuthor($this->bbAuthor);
    }

    public function showTitle()
    {
        return $this->bbImp->showTitle($this->bbTitle);
    }
}
