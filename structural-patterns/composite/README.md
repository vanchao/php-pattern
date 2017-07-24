In the Composite pattern an idividual object or a group of that object will have similar behaviors.<br> 

In this example, the OneBook class is the individual object. The SeveralBooks class is a group of zero or more OneBook objects.<br> 

Both the OneBook and SeveralBooks can return information about the books title and author. OneBook can only return this information about one single book, while SeveralBooks will return this information one at a time about as many OneBooks as it holds.<br> 

While both classes have addBook and removeBook functions, they are only functional on SeveralBooks. OneBook will merely return FALSE when these functions are called.<br>
