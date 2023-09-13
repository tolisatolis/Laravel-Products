Back End Assignment

TOLISHub is a B2B marketplace where buyers come and request the products they
want to buy, and our matching algorithm will have to find the suppliers that produce
those products. For this to happen we need to have a database where we store the
products every supplier can produce.
Every product can have multiple dimensions and the following specifications:
Species (required): Pine, Spruce, Fir, Birch, Apple Tree
Grading System/Grade (required): We have 2 Grading Systems with different
options per each system
Nordic Blue: A1, A2, A3, A4, B
Tegernseer: O, I, II, III, IV, V
Drying Method (required): Fresh, Kiln Dried, Air Dried
Treatment (optional): Heat Treated, Anti-stain Treatment

The dimensions consist of Thickness, Width, and Length and the representation is
{Thickness}x{Width}x{Length}

Example Products:
1. Spruce, Nordic Blue/A1, Fresh, Heat Treated - 50x150x1200
2. Spruce, Nordic Blue/A1, Fresh, Heat Treated - 50x120x1200
3. Fir, Nordic Blue/A1, Fresh, Heat Treated - 50x100x3000
4. Fir, Nordic Blue/A1, Fresh - 50x120x1200
5. Fir, Nordic Blue/A1, Fresh - 90x90x2000
6. Pine, Tegernseer/IV, Fresh, Heat Treated - 40x90x1200

Task:
On this assignment, we would like you to create a Laravel application where we can list
all the products that one supplier can produce and the form where our internal users will
be able to add those products.

Notes:
1. Authentication is not part of the task. The application can be visited by any user.
2. You can use any UI library (for example Tailwind) that you feel comfortable with to
build faster UI.
3. Data validation on the form is part of the assignment.
4. UI/UX will not be part of the evaluation, but we will appreciate it. :)




This is my implementation for the assignment 
Any feedback (especially bad) apreciated <3 
There is an admin section to list the helping tables for the products
and the marketplace section where we can list products 
I used views ,components and tailwind for the UI 
In the controllers i just used a Service for each model for CRUD operations 
and a view service to configure the complicated views
I also used formRequest validation to validate the data for the create and Update 
and created an endpoint that returns a json result for grades 
just to show how would i implement an Api / request style application where the backend part is writen in 
Laravel sending JSON responses to another frontend app .
I didnt use any resources since all my endpoints return Views but i could do that if i had 
to build an API to transfer json data.
Now for the database design i will explain the deccesions behind the product and grades
The other tables are just dummy tables with name/id/auditlogs : 
Product Columns 
| Field             |
|-------------------|
| id                |
| thickness         |
| length            |
| width             |
| species_id        |
| treatment_id      |
| drying_method_id  |
| grade_id          |
| grading_system_id |
| created_at        |
| updated_at        |

I chose to have 3 columns for dimensions to have a better controll over the data and its manipulation. 
Different datafields also meant that i could display them in any way i want(111X222X333 or 111 222 333) and even transform them easier in different units of measure.

species_id,treatment_id,drying_method_id are just FK to the admin tables 
 Now for grades /grade system i chose to store bothe IDS in the DB to have immidiate acces to both of them 
 and i just validate the fact that a product has a grading matching the correct grade system in a Custom rule in the form request

Grades is table 


| Field             |
|-------------------|
| id                |
| name              |
| grading_system_id |
| created_at        |
| updated_at        |

Grades table just has a foreign key to Grading systems to implement the fact that a grade System has many grades 
this also allows us to filter /sort by grade.

Finally to start the application 
Go to .env and add values to these 
DB_CONNECTION=
DB_HOST=
DB_PORT=
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
to connect to your server 
Run php artisan migrate to Create a DB with name DB_DATABASE 
Run php artisan db:seed to populate admin tables with daata
Run php artisan serve to start the development server 
Split terminal and run npm run dev for Tailwind

Soft deleted is not implemented because 
there is no such feeling as deleting production data

If you read this README file
here is a Quote 
A person who never made a mistake never tried anything new.  Albert Einstein
Thanks ❤️ 
Apostolis 