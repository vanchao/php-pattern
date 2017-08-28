In the Template Pattern an abstract class will define a method with an algorithm, and methods which the algorithm will use. The methods the algorithm uses can be either required or optional. The optional method should by default do nothing.<br>

The Template Pattern is unusual in that the Parent class has a lot of control.<br>

In this example, the TemplateAbstract class has the showBookTitleInfo() method, which will call the methods getTitle() and getAuthor(). The method getTitle() must be overridden, while the method getAuthor() is not required.<br>
