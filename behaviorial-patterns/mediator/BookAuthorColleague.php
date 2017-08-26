<?php
include_once("BookColleague.php");

class BookAuthorColleague extends BookColleague{
    private $author;
    private $state;

    public function __construct($author_in, $mediator_in) {
        $this->author = $author_in;
        parent::__construct($mediator_in);
    }

    public function getAuthor() {
        return $this->author;
    }

    public function setAuthor($author_in) {
        $this->author = $author_in;
    }

    public function getState() {
        return $this->state;
    }

    public function setState($state_in) {
        $this->state = $state_in;
    }

    public function setAuthorUpperCase() {
        $this->setAuthor(strtoupper($this->getAuthor()));
        $this->setState('upper');
        $this->getMediator()->change($this);
    }

    public function setAuthorLowerCase() {
        $this->setAuthor(strtolower($this->getAuthor()));
        $this->setState('upper');
        $this->getMediator()->change($this);
    }

}
