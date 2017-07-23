<?php

include_once('AbstractBookFactory.php');
include_once('OReillyPHPBook.php');
include_once('OReillyMySQLBook.php');

class OReillyBookFactory extends AbstractBookFactory {
    private $context = "OReilly";

    public function makePHPBook() {
        return new OReillyPHPBook();
    }

    public function makeMySQLBook() {
        return new OReillyMySQLBook();
    }
}
