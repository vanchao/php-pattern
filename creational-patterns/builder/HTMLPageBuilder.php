<?php

include_once('AbstractPageBuilder.php');
include_once('HTMLPage.php');

class HTMLPageBuilder extends AbstractPageBuilder {
    private $page = NULL;

    public function __construct() {
        $this->page = new HTMLPage();
    }

    public function setTItle($title) {
        $this->page->setTItle($title);
    }

    public function setHeading($heading) {
        $this->page->setHeading($heading);
    }

    public function setText($text) {
        $this->page->setText($text);
    }

    public function formatPage() {
        $this->page->formatPage();
    }

    public function getPage() {
        return $this->page;
    }
}
