<?php

class BookCommandee{
    private $author;
    private $title;

    public function __construct($title, $author)
    {
        $this->setAuthor($author);
        $this->setTitle($title);
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function setStarsOn()
    {
        $this->setAuthor(str_replace(' ','*',$this->getAuthor()));
        $this->setTitle(str_replace(' ','*',$this->getTitle()));
    }

    public function setStarsOff()
    {
        $this->setAuthor(str_replace(' ','*',$this->getAuthor()));
        $this->setTitle(str_replace(' ','*',$this->getTitle()));
    }

    public function getAuthorAndTitle()
    {
        return "{$this->getTitle()} by {$this->getAuthor()}";
    }
}
