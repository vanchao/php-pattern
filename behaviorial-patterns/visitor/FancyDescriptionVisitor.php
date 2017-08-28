<?php
  include_once('BookVisitee.php');
  include_once('SoftwareVisitee.php');
  include_once('Visitor.php');

  class FancyDescriptionVisitor extends Visitor {

    private $description = NULL;


    function getDescription() { return $this->description; }
    function setDescription($descriptionIn) {
      $this->description = $descriptionIn;
    }


    function visitBook(BookVisitee $bookVisiteeIn) {
      $this->setDescription($bookVisiteeIn->getTitle()
        . '
...!*@*! written !*! by !@! ' .  $bookVisiteeIn->getAuthor() );
	}


    function visitSoftware(SoftwareVisitee $softwareVisiteeIn) {
      $this->setDescription($softwareVisiteeIn->getTitle()
        . '
...!!! made !*! by !@@! ' .
          $softwareVisiteeIn->getSoftwareCompany()
        . '
...www website !**! at http://' .
          $softwareVisiteeIn->getSoftwareCompanyURL());
	}


  }
