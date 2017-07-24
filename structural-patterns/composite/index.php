<?php

  include_once('OnTheBookShelf.php');  
  include_once('OneBook.php');
  include_once('SeveralBooks.php');  


  echo tagins("html");
  echo tagins("head");  
  echo tagins("/head");  
  echo tagins("body");


  echo "BEGIN TESTING COMPOSITE PATTERN";
  echo tagins("br").tagins("br");
  
  $firstBook = 
    new OneBook("Core PHP Programming, Third Edition",
	            "Atkinson and Suraski");
  echo "(after creating first book) oneBook info: ".tagins("br");
  echo $firstBook->getBookInfo(1);
  echo tagins("br").tagins("br");
  
  $secondBook = 
    new OneBook("PHP Bible",
	            "Converse and Park");
  echo "(after creating second book) oneBook info: ".tagins("br");
  echo $secondBook->getBookInfo(1);
  echo tagins("br").tagins("br");


  $thirdBook = 
    new OneBook("Design Patterns",
	            "Gamma, Helm, Johnson, and Vlissides");
  echo "(after creating third book) oneBook info: ".tagins("br");
  echo $thirdBook->getBookInfo(1);
  echo tagins("br").tagins("br");


  $books = new SeveralBooks();


  $booksCount = $books->addBook($firstBook);
  echo "(after adding firstBook to books) SeveralBooks info : "
    .tagins("br");
  echo $books->getBookInfo($booksCount);
  echo tagins("br").tagins("br");


  $booksCount = $books->addBook($secondBook);
  echo "(after adding secondBook to books) SeveralBooks info : "
    .tagins("br");
  echo $books->getBookInfo($booksCount);
  echo tagins("br").tagins("br");


  $booksCount = $books->addBook($thirdBook);
  echo "(after adding thirdBook to books) SeveralBooks info : "
    .tagins("br");
  echo $books->getBookInfo($booksCount);
  echo tagins("br").tagins("br");


  $booksCount = $books->removeBook($firstBook);
  echo "(after removing firstBook from books) SeveralBooks count : ";
  echo $books->getBookCount();
  echo tagins("br").tagins("br");
  
  echo "(after removing firstBook from books) SeveralBooks info 1 : "
    .tagins("br");
  echo $books->getBookInfo(1);
  echo tagins("br").tagins("br");
  
  echo "(after removing firstBook from books) SeveralBooks info 2 : "
    .tagins("br");
  echo $books->getBookInfo(2);
  echo tagins("br").tagins("br");


  echo tagins("br");
  echo "END TESTING COMPOSITE PATTERN";
  echo tagins("br");
  
  echo tagins("/body");
  echo tagins("/html");
  
  //doing this so code can be displayed without breaks
  function tagins($stuffing) {
    return "<".$stuffing.">";
  }
