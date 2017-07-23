<?php

class HTMLPage {
    private $page = NULL;

    private $page_title = NULL;
    private $page_heading = NULL;
    private $page_text = NULL;

    public function __construct() {
    }
    
    public function showPage() {
        return $this->page;
    }

    public function setTitle($title) {
        $this->page_title = $title;
    }

    public function setHeading($heading) {
        $this->page_heading = $heading;
    }

    public function setText($text) {
        $this->page_text .= $text;
    }

    public function formatPage() {
        $this->page  = '<html>';
        $this->page .= 
          '<head><title>'.$this->page_title.'</title></head>';
        $this->page .= '<body>';
        $this->page .= '<h1>'.$this->page_heading.'</h1>';
        $this->page .= $this->page_text;
        $this->page .= '</body>';
        $this->page .= '</html>';
    }
}
