<?php

class BookTopic extends AbstractBookTopic{
    private $topic;
    private $title;

    public function __construct($topic) {
        $this->topic = $topic;
        $this->title = null;
    }

    public function getTopic() {
        return $this->topic;
    }

    public function getTitle() {
        if(null != $this->title) {
            return $this->title;
        } 
        return 'there is no title available';
    }

    public function setTitle($title) {
        $this->title = $title;
    }
}
