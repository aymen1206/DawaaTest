
Please folow the steps:

1-Creat DataBase with ----name :'xcompany'------ username:'root' --------Password:

2-php artisan migrate

3-php artisan db:seed --class=GendersSeeder

4-php artisan db:seed --class=NationalitiesSeeder

5-php artisan db:seed --class=HrManagerSeeder

6-php artisan db:seed --class=HrCoordinatorsSeeder

7- Now 2 users have been Created 
   a. Hr Manager : email :Admin@Xcompany.com ---Pw:12345678
   b. Hr Coordinator : email :Aymen@Xcompany.com ---Pw:12345678

8-php artisan serve

9- 127.0.0.1:8000/     this is the path to HR Manager and Coodrinator

10- 127.0.0.1:8000/Application     this is the path to Upload form

11- export Api file from Post Man in path( Aymen Hashim Ahmed/Dawaa Project.postman_collection.json)