<?php
  include_once('Book.php');
  include_once('BookList.php');
  include_once('BookListIterator.php');
  include_once('BookListReverseIterator.php');


  echo tagins("html");
  echo tagins("head");
  echo tagins("/head");
  echo tagins("body");


  echo "BEGIN TESTING ITERATOR PATTERN";
  echo tagins("br").tagins("br");

  $firstBook =
    new Book("Core PHP Programming, Third Edition",
	            "Atkinson and Suraski");
  $secondBook =
    new Book("PHP Bible",
	            "Converse and Park");
  $thirdBook =
    new Book("Design Patterns",
	            "Gamma, Helm, Johnson, and Vlissides");


  $books = new BookList();
  $books->addBook($firstBook);
  $books->addBook($secondBook);
  $books->addBook($thirdBook);

  echo "Testing the Iterator".tagins("br");

  $booksIterator = new BookListIterator($books);


  while ($booksIterator->hasNextBook()) {
    $book = $booksIterator->getNextBook();
    echo "getting next book with iterator : ".tagins("br");
    echo $book->getAuthorAndTitle();
    echo tagins("br").tagins("br");
  }

  $book = $booksIterator->getCurrentBook();
  echo "getting current book with iterator : ".tagins("br");
  echo $book->getAuthorAndTitle();
  echo tagins("br").tagins("br");

  echo tagins("br");
  echo "Testing the Reverse Iterator".tagins("br");


  $booksReverseIterator = new BookListReverseIterator($books);


  while ($booksReverseIterator->hasNextBook()) {
    $book = $booksReverseIterator->getNextBook();
    echo "getting next book with reverse iterator : ".tagins("br");
    echo $book->getAuthorAndTitle();
    echo tagins("br").tagins("br");
  }

  $book = $booksReverseIterator->getCurrentBook();
  echo "getting current book with reverse iterator : ".tagins("br");
  echo $book->getAuthorAndTitle();
  echo tagins("br").tagins("br");


  echo tagins("br");
  echo "END TESTING ITERATOR PATTERN";
  echo tagins("br");

  echo tagins("/body");
  echo tagins("/html");

  //doing this so code can be displayed without breaks
  function tagins($stuffing) {
    return "<".$stuffing.">";
  }
