<?php
  include_once('Visitee.php');
  include_once('BookVisitee.php');
  include_once('SoftwareVisitee.php');
  include_once('Visitor.php');
  include_once('PlainDescriptionVisitor.php');
  include_once('FancyDescriptionVisitor.php');


  echo tagins("html");
  echo tagins("head");
  echo tagins("/head");
  echo tagins("body");


  echo "BEGIN TESTING VISITOR PATTERN";
  echo tagins("br").tagins("br");

  $book =
    new BookVisitee("Design Patterns",
                    "Gamma, Helm, Johnson, and Vlissides");

  $software =
    new SoftwareVisitee("Zend Studio",
                        "Zend Technologies",
                        "www.Zend.com");


  $plainVisitor = new PlainDescriptionVisitor();

  acceptVisitor($book,$plainVisitor);
  echo "plain description of book: ".$plainVisitor->getDescription();
  echo tagins("br");
  acceptVisitor($software,$plainVisitor);
  echo "plain description of software: ".$plainVisitor->getDescription();
  echo tagins("br");


  echo tagins("br");

  $fancyVisitor = new FancyDescriptionVisitor();

  acceptVisitor($book,$fancyVisitor);
  echo "fancy description of book: ".$fancyVisitor->getDescription();
  echo tagins("br");

  acceptVisitor($software,$fancyVisitor);
  echo "fancy description of software: ".$fancyVisitor->getDescription();
  echo tagins("br");


  echo tagins("br");
  echo "END TESTING VISITOR PATTERN";
  echo tagins("br");


  echo tagins("/body");
  echo tagins("/html");


  //double dispatch any visitor and visitee objects
  function acceptVisitor(Visitee $visitee_in, Visitor $visitor_in) {
    $visitee_in->accept($visitor_in);
  }


  //doing this so code can be displayed without breaks
  function tagins($stuffing) {
    return "<".$stuffing.">";
  }
