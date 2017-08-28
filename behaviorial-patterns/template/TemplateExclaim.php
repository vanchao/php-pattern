<?php

include_once("TemplateAbstract.php");

class TemplateExclaim extends TemplateAbstract {
    public function processTitle($title) {
        return str_replace(' ','!!!',$title);
    }

    public function processAuthor($author) {
        return str_replace(' ','!!!',$author);
    }
}
