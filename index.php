<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> EXERCICE XP </title>
</head>

<body>

    <!-- Exercise 1 : Print “Hello World” Using Echo

    Write a program to print “Hello World” using echo only?
    You can not use any variable. -->


    <?php echo " <h1>Hello World </h1>" ?> <br/>

    <!-- Exercise 2 : Print “Hello PHP” Using Echo

    Write a program to print “Hello PHP” using php variable
    You can not use text directly in echo but can use variable. -->
    

    <?php $message = "Hello PHP"; echo "<h2>". $message ."</h2>" ?> <br/>


    <!-- Exercise 3 : Print Two PHP Variables Using Single Echo
    Write a program to print two PHP variables using single echo statement.

    First variable have text “Good Morning.”
    Second variable have text “Have a nice day!”
    Your output should be “Good morning. Have a nice day!”
    You are allowed to use only one echo statement in this program. -->
    

    <?php $greeting = "Good Morning"; $status = "Have a nice day!"; echo $greeting ." ". $status ?> <br/>


    <!-- Exercise 4 : Reverse The String

    Write a PHP program to reverse the string.
    You can use any string related built-in Function.
    You can use only one variable. -->
   
    <?php $msgReverse = "My message"; echo " $msgReverse is === " .strrev($msgReverse) ?>



</body>

</html>