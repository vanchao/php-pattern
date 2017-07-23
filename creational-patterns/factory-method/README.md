In the Factory Method Pattern, a factory method defines what functions must be available in the non-abstract or concrete factory. These functions must be able to create objects that are extensions of a specific class. Which exact subclass is created will depend on the value of a parameter passed to the function.<br> 

In this example we have a factory method, AbstractFactoryMethod, that specifies the function, makePHPBook($param).<br> 

The concrete class OReillyFactoryMethod factory extends AbstractFactoryMethod, and can create the correct extension of the AbstractPHPBook class for a given value of $param.<br>
