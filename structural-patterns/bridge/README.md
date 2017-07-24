In the Bridge Design Pattern, functionality abstraction and implementation are in separate class hierarchies.<br> 

In this example we have BridgeBook which uses either BridgeBookCapsImp or BridgeBookStarsImp. BridgeBook will assign one implementation or the other each time BridgeBook is instantiated.<br> 

The bridge pattern is helpful when you want to decouple a class from it's implementation.<br>
