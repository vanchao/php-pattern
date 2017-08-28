<?php

include_once("TemplateAbstract.php");

class TemplateStars extends TemplateAbstract {
    public function processTitle($title) {
        return Str_replace(' ','*',$title);
    }
}
