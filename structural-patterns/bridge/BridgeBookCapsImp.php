<?php

include_once('BridgeBookImp.php');

class BridgeBookCapsImp extends BridgeBookImp{
    public function showAuthor($author)
    {
        return strtoupper($author);
    }

    public function showTitle($title)
    {
        return strtoupper($title);
    }
}
