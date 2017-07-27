<?php

class BookSubTopic extends AbstractBookTopic{
    private $topic;
    private $parentTopic;
    private $title;

    public function __construct($topic, BookTopic $parentTopic)
    {
        $this->topic = $topic;
        $this->parentTopic = $parentTopic;
        $this->title = null;
    }

    public function getTopic() {
        return $this->topic;
    }

    public function getParentTopic() {
        return $this->parentTopic;
    }

    public function getTitle() {
        if(null != $this->title) {
            return $this->title;
        }
        return $this->parentTopic->getTitle();
    }

    public function setTitle($title) {
        $this->title = $title;
    }
}
