In the facade pattern a class hides a complex subsystem from a calling class. In turn, the complex subsystem will know nothing of the calling class.<br> 

In this example, the CaseReverseFacade class will call a subsystem to reverse the case of a string passed from the Book class. The subsystem is controlled by the reverseCase function in the CaseReverseFacade, which in turn calls functions in the ArrayCaseReverse and ArrayStringFunctions classes. As written, the CaseReverseFacade can reverse the case of any string, but it could easily be changed to only reverse a single element of a single class.<br> 

In my example I make all elements of the Facade and the subsystem static. This could also easily be changed.<br>
