<?php

abstract class Visitor {
    abstract function visitBook(BookVisitee $bookVisitee_in);
    abstract function visitSoftware(SoftwareVisitee $softwareVisitee_in); 
}
