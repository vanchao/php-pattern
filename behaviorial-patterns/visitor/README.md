In the Visitor pattern, one class calls a function in another class with the current instance of itself. The called class has special functions for each class that can call it.<br>

In this example, the BookVisitee can call the visitBook function in any function extending the Visitor class. By doing this new Visitors which format the BookVisitee information can easily be added without changing the BookVisitee at all.<br>
