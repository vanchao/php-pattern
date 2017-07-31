<?php

include_once("BookCommandee.php");

abstract class BookCommand {
    protected $bookCommandee;

    public function __construct($bookCommandee)
    {
        $this->bookCommandee = $bookCommandee;
    }

    abstract function execute();
}
