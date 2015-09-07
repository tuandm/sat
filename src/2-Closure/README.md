#### Question 2
* In Javascript, give an example of a meaningful use of closures.

#### Answer
I never used Closure in my code before. Maybe it's a good idea to organize accessibility of Javascript while JS is not fully OOP. I love to manage my code with clean way. This answer is a litte thing I knew with Closure before, with something I got from Google (my friend).

Basically, Closure is the inner function of one outer function. The main different things between Closure in Javascript with inner function in almost programming language are
- The accessibility with outer variables. That means, Closure has access to every variables from outer function.
- Closure will not be destroyed after outer function exited. It will keep existence as reference if outer function return that Closure.

####  Example
Please see source code in https://github.com/tuandm/sat/blob/master/src/2-Closure/Closure.js

Example:
```
alert(getTotalProductPrice(new Price(100, 'USD')));
```
So the product price, will be calculated inside the Closure, and only Closure knows about that logic. 

####  Note
* There are some complex logic when working with Closure. If we did not manage our Closures in good way, they will be hard to manage, and sometime lead to memory leak problem.

