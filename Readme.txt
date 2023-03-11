
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

12- run unit test for the api  with command (php artisan test)

*by runnig the test file 'Tests\Unit\UploadFormApiTest ' what is going to happen is the test will pass for only firs time you run the test because the pdf file will be moved 
from path:/Aymen Hashim Ahmed/test-files/CV_For_test.pdf
to path: /Aymen Hashim Ahmed/DwaaTest/upload/CVs
thats what realy the Api Expected to do  so it's passed the test.