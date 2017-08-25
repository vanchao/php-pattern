In the Iterator pattern a class will be able to traverse the elements of another class.<br>

In this example, the BookList class will have stored zero to many elements of the Book class. The BookListIterator can return all of the Books in the BookList one by one and in the sequential order that the Book elements were added to the BookList.<br>

I also show a BookListReverseIterator. The BookListReverseIterator can return all of the Books in the BookList one by one and in the reverse sequential order that the Book elements were added to the BookList. This is added to show that custom iterators can be quite useful when you need to process a list in an sequence other than sequentially first to last. While this Iterator is reverse, I could have also shown an iterator that returned, for example, only odd numbered elements.<br>

Note that the Iterators shown are not "robust", and would yield unpredicatable results if the List the Iterator is processing has elements removed while the Iterator is traversing the List.<br>
