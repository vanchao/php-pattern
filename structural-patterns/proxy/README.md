In the proxy pattern one class stands in for and handles all access to another class.<br> 

This can be because the real subject is in a different location (server, platform, etc), the real subject is cpu or memory intensive to create and is only created if necessary, or to control access to the real subject. [Design Patterns by Gamma et al p. 208 - 209] A proxy can also be used to add additional access functionality, such as recording the number of times the real subject is actually called.<br> 

In this example, the ProxyBookList is created in place of the more resource intensive BookList. ProxyBookList will only instantiate BookList the first time a method in BookList is called.<br>
