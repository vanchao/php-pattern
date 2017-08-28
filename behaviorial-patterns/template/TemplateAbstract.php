<?php

include_once("Book.php");

abstract class TemplateAbstract {
    public final function showBookTitleInfo($book_in) {
        $title = $book_in->getTitle();
        $author = $book_in->getAuthor();
        $processedTitle = $this->processTitle($title);
        $processedAuthor = $this->processAuthor($author);
        $processed_inf = null == $processedAuthor ? $processedTitle : "$processedTitle by $processedAuthor";
        return $processed_inf;
    }

    abstract function processTitle($title);

    function processAuthor($author) {
        return null;
    }
}
