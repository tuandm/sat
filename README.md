## Skill Assessment Test
#### Question 1
* https://github.com/tuandm/sat/tree/master/src/1-Gallery

#### Question 2
* https://github.com/tuandm/sat/tree/master/src/2-Closure

#### Question 2
* https://github.com/tuandm/sat/tree/master/src/3-Sum-of-Multitple

#### Quesion 4 
* Describe one component in Zend that you are unhappy with, why you find it lacking, and how you handle it.

#### Answer
Well, it's not easy to answer this question. Because sometimes you didn't know how to use the component in a correct way and you feel unhappy with it. Or sometimes you get familiar with something before using Zend Compontents. I just want to share my experiences about some components that I could not use fully in my projects.
- `Zend_Form`
 + It's not easy to understand all about this component - how to handle style, how to decorate, how to make elements fix to an layout, how to handle responsive. I must move the rendering part to the view layer (templates, or presentation framework - like bootstrap). But of course, `Zend_Form` is the good approach to build your forms with excellent validation and binding.
- `Zend_Http_Client`
 + I didn't use this component, I used native curl function and manage the parameters by myself. For me, `Zend_Http_Client` is quite complex and heavy.
- `Zend_Db_Table`
 + Maybe we didn't use this component in the good way. For each table we have in system, we generated the corresponding class. And our system is really big with hundreds of tables, a lot of classes are generated. Then we faced with the problem that is a lot of `DB_Table` instances are created for each request to system, but actually we need only static `Zend_Db_Adatper` that accesses to database for querying. And we decided to delete all `Zend_Db_Table` class, and build models base on real/main objects of system (like `UserModel`, `ProductModel`, etc...). 

#### Quesion  5
* In Mongo, what is your preferred method to handle SQL foreign keys? Why is it preferable to alternatives?

#### Answer
Basically, MongoDB is NoSQL that is not relational, so it does not support foreign keys by default. I didn't work with MongoDB in the real project before, so I can not give any good solution that I'm really experienced.
As far as I know, to manage foreign keys by the way MongoDB suggested, we can use Database References that embeds the id of child/external document as reference into another one. And application must run second query to get related data, there are some drivers can do this query automatically (Like http://php.net/manual/en/class.mongodbref.php/).

#### Question 6
* Describe your ideal ORM. Is there any existing ORM that gets close? Which ones, and what do you feel are missing in them?

This is a long story that can not be talked in short words. ORM, is the Object Relational Mapping that helps querying and manipulating data using classes/objects mapping and paradigm. That means you will manage data by objects and their relationship beside of seeing database as tables/columns. Almost PHP Frameworks are having internal ORM like Yii (based on ActiveRecord pattern) or Zend (`Zend_Db_Table` and `Zend_Db_Table_Row`). There are some benefits of ORM:
 - Help developers form model entities based on business objects - because ORM will hide database structure by its mapping.
 - Help developers standardize querying to database (CRUD) - All querying will be executed with classes/methods (object oriented query language).
 - DataObject Navigation
 - Concurrent support/Caching/Transation Management
 And some others.

 ORM is good system for applying into small-to-middle application, because it will help to manage everything related with database structure and connection. 
 For the big system with a lot of tables and millions rows, I think we should care about the micro optimization that can be improved with each small-to-big SQL. And I never work with the big system that uses fully ORM inside, they write their own SQL for every SQL queries they want to enhance performance.

I worked with Doctrine before, and felt happy with it. But after my application was big and bigger, I had to move some heavy tasks to native way with raw SQL. Performance is always a big and long war.
