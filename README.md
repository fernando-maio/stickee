# Stickee Developer Challenge

*** REST API responsible to share the numbers of widget in pre-defined package sizes, and round to up.

I built a basic MVC structure to split the responsibility. I created a Component layer to put my business rules. 
Basically, the index file is responsible to manage the routes sending the information to Controller layer. There, it send the data to Component layer and return the result.
In the Component layer, has an array with pre-defined sizes. It's possible add, remove or modify the existents.
In test case, I used some invalid values to test the false response.

To test the API, the user need to start a server, and to access the path /stickee ans send a url parameter as bellow:

- Start Server on Terminal: php -S localhost:8000 -t public
- URL Access: http://localhost:8000/stickee?widgets=19876


For this project, I used the technologies below:

* Composer: To start a project and manage the paths;
* Slim 4: To resolve routes;
* PHPUnit: To unit tests.

I putted some comments inside the code to have a better comprehention.

Thank you for the opportunity. If you need anything else, please, let me know!

Fernando Maio
