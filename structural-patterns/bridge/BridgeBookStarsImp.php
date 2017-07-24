<?php

include_once('BridgeBookImp.php');

class BridgeBookStarsImp extends BridgeBookImp{
    public function showAuthor($author)
    {
        return str_replace(" ", "*", $author);
    }

    public function showTitle($title)
    {
        return str_replace(" ", "*", $title);
    }
}
