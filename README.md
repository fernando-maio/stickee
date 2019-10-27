# Stickee Developer Challenge

*** REST API responsible to share the numbers of widget in pre-defined package sizes, and round to up.

I built a basic MVC structure to split the responsibility. I create a Component layer to put my business rules. Basically, the index file is responsible to manage the routes sending the information to Controller layer. There, it sent the data to Component layer and return the result.


To test the API, the user need to start a server, and to access the path /stickee ans send a url parameter as bellow:
http://localhost:8000/stickee?widgets=19876


For this project, I used the technologies below:

* Composer: To start a project and manage the paths;
* Slim 4: To resolve routes;
* PHPUnit: To unit tests.

I putted some comments inside the code to have a better comprehention.

Thank you for the opportunity. If you need anything else, please, let me know!

Fernando Maio