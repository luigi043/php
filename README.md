#Practical PHP work (Sheet 2) - 2023/2024

The objective of this practical class is to allow the student to learn how to program in PHP using object-oriented programming and interaction with databases. It is intended that the student masters the coding of the following items: classes/objects, access to the database through CRUD operations (create, read, update and delete). Next, coding tasks are requested, for which you must use an IDE, such as PHPStorm.

If you managed to successfully develop the code whose requirements were requested in sheet no. 1, from the last class, now try to abstract its resolution into an approach based on object orientation (help: php.net poo documentation). Therefore, you must now develop the following functionalities:
Write the code for the "grade" class in the "grade_class.php" file, abstracting the same requirements defined in sheet 1.
Write the code for the "student_class.php" class abstracting the same requirements defined in sheet 1. and relate this class to the "grade" class.
Create the index.php file and write the code there that allows you to instantiate objects of the "student" and "grade" classes so that all data associated with a student can be displayed on the Web page. The data input is at this stage hardcoded (within the code).
Integrate the data from the form present in the "student_form.htm" file with the two previously coded classes.
Debug possible programming errors after usage testing.

After having solved task 1., of this practical sheet, you should develop the following functionalities, which aim to explore programming with connection to a database:
Create the "school" database in your "MySQL" DBMS;
Create the "student" and "grade" tables with the fields abstracted from the structure of the respective classes;
Write the "db" class (db.php) that abstracts the task of manipulating data from the DB, such as the connect() method that allows you to connect to the DB and disconect();
  Create the "StudentDB" and "GradeDB" classes with the methods createStudent(...), readStudent(....), updateStudent(....) and deleteStudent(....), createGrade(...) , readGrade(....), updateGrade(....) and deleteGrade(....) which allow abstracting the CRUD operations requested by the two classes in question.
Change the form name present in the "student_form.htm" file to "add_student.htm", which allows you to add the data of a new student. The data must be inserted into an object of the "student" class that is sent to the respective code that records this data in the DB. Encode all necessary code for this purpose.
Write the form present in the "edit_student.htm" file that allows you to change any field for a specific student that is chosen by their student number. Encode all necessary code for this purpose.
Write the form present in the "add_grade.htm" file that allows you to add one or more grades for a specific student chosen by their student number. Encode all necessary code for this purpose.
Write the form present in the "edit_grade.htm" file that allows you to update a given grade, for a specific student, who is chosen by their student number. Encode all necessary code for this purpose.
Improve the code in the index.php file to allow all previous use cases to be executed.
Debug possible programming errors after usage testing.
