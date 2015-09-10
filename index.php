<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        /* Associates the index.php file with the Student.php file.
         * Allows functions from Student.php to be called in this file.
         */
        include('student.php');
        
        /*
         * A storage of students.
         */
        $students = array();
        
        /*
         * Creation of the first student.
         */
        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home', 'john@doe.com');
        $first->add_email('work', 'jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $students['j123'] = $first;
        
        /*
         * Creation of the second student.
         */
        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home', 'albert@braniacs.com');
        $second->add_email('work1', 'a_einstein@bcit.com');
        $second->add_email('work2', 'albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        $students['a456'] = $second;
        
        /*
         * Creation of the third student.
         */
        $third = new Student();
        $third->surname = "Le";
        $third->first_name = "Duy";
        $third->add_email('work', 'duy_le@bcit.ca');
        $third->add_grade(99);
        $third->add_grade(96);
        $students['d789'] = $third;
        
        // Sorts the objects in the array by key
        ksort($students);
        
        foreach ($students as $student)
            echo $student->toString();
        

        
        ?>
        
    </body>
</html>
