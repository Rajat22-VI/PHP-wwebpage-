<!-- php is a opensurce scripting language  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php practise website</title>
</head>
<body>
    <div class="container">
        <h1>This is a PHP webpage</h1>
        <?php 
        define ('PI',3.14);
        //secret algrorithim
        echo"Hellow world this is a php page";
        echo "<br>";
        echo "<br>";
        // Varibales in php
        // The php is not a case sensitive language
        echo "<h1>Understanding Variables in PHP</h1>";
        echo "Variable1 = 34";
        echo "<br>";
        echo "Variable2 = 56";
        $variable1 = 5;
        $variable2 = 2;
        echo "<br>";
        Echo $variable1 + $variable2;
        echo "<br>";


    //Operators in Php 
    //Arthemetic Operators
        echo "<h1>Understanding Operators In php</h1>";        // Addition Operator
        echo "<h3> Addition Operator</h3>";
        echo "The value of variable1 + variable2 is : ";
        echo $variable1 + $variable2;
        echo "<br>";
        // Substraction Operator
        echo "<h3> Substraction Operator</h3>";
        echo "The value of variable1 - variable2 is : ";
        echo $variable1 - $variable2;
        echo "<br>";

        //Multiplication Operator
        echo "<h3> Multiplication Operator</h3>";
        echo "The value of variable1 * variable2 is : ";
        echo $variable1 * $variable2;
        echo "<br>";

        // Divisional Operator
        echo "<h3> Divisional Operator</h3>";
        echo "The value of variable1 / variable2 is : ";
        echo $variable1 / $variable2;
        echo "<br>";
        
        //Modulus Operator
        echo "<h3> Modulus Operator</h3>";
        echo "The value of variable1 % variable2 is : ";
        echo $variable1 % $variable2;
        echo "<br>";


    // Assigement Operators
        echo "<h1>Understanding Assigement Operators In php</h1>";
        // = is used to assign the value to the variable
        echo "<h3> = Operator</h3>";
        $newvar = $variable1;
        echo "The value of newvar is ";
        echo $newvar;
        echo "<br>";

        // += is used to add the value to the variable
        echo "<h3> += Operator</h3>";
        $newvar += 1;
        echo "The value of newvar is : ";
        echo $newvar;
        echo "<br>";

        // -= is used to subtract the value from the variable
        echo "<h3> -= Operator</h3>";
        $newvar -= 1;
        echo "The value of newvar is : ";
        echo $newvar;
        echo "<br>";

        // *= is used to multiply the value of the variable
        echo "<h3> *= Operator</h3>";
        $newvar *= 5;
        echo "The value of newvar is : ";
        echo $newvar;
        echo "<br>";

        // /= is used to divide the value of the variable
        echo "<h3> /= Operator</h3>";
        $newvar /= 3;
        echo "The value of newvar is : ";
        echo $newvar;
        echo "<br>";

        // %= is used to get the remainder of the division of the variable
        echo "<h3> %= Operator</h3>";
        $newvar %= 2;
        echo "The value of newvar is : ";
        echo $newvar;
        echo "<br>";

        // .= is used to concatenate the value to the variable
        // in this it will add 1 to the value of newvar and then assign it to newvar
        echo "<h3> .= Operator</h3>";
        $newvar .= "Hello World";
        echo "The value of newvar is : ";
        echo $newvar;

    //Comparison Operators
        // It is used to compare the values of two variables
        echo "<h1>Comparison Operators</h1>";
        echo "<h3> == Operator</h3>";
        echo "The value of 1 == 4 is : ";
        var_dump(1 == 4);
        echo "<br>";

        // It is used to check if the value of the variable is equal to the value of another variable
        echo "<h3> != Operator</h3>";
        echo "The value of 1 != 4 is : ";
        var_dump(1 != 4);
        echo "<br>";

        // It is used to check if the value of the variable is greater than the value of another variable
        echo "<h3> >= Operator</h3>";
        echo "The value of 1 >= 4 is : ";
        var_dump(1 >= 4);
        echo "<br>";

        // It is used to check if the value of the variable is less than the value of another variable
        echo "<h3> <= Operator</h3>";
        echo "The value of 1 <= 4 is  : ";
        var_dump(1 <= 4);
        echo "<br>";

        // It is used to check if the value of the variable is greater than the value of another variable
        echo "<h3> > Operator</h3>";
        echo "The value of 1 > 4 is : ";
        var_dump(1 > 4);
        echo "<br>";

        // It is used to check if the value of the variable is less than the value of another variable
        echo "<h3> < Operator</h3>";
        echo "The value of 1 < 4 is : ";
        var_dump(1 < 4);
        echo "<br>";
    
        // This is a alternative way to write the code using functions
        // It is used to check if the value of the variable is equal to the value of another variable
        echo "<h3> === Operator</h3>";
        echo "The value of 1 === 4 is : ";
        var_dump(1 === 4);  
        echo "<br>";    
        
    // Increment/Decrement Operators
        // It is used to increase the value of the variable by 1
        echo "<h1>Increment/Decrement Operators</h1>";
        echo "<h3>++ Operator</h3>";
        echo "variabel1++ is :";
        echo $variable1 ++ ; 
        // first it will chcek the varibale and it will print the variable as it is 
        echo $variable1 ; 
        // and here it will add the number to the variable
        echo "<br>";

        echo "<h3>-- Operator</h3>";
        echo "variable1-- is :";
        echo $variable1 -- ;
        // first it will chcek the varibale and it will print the variable as it is
        // Then it will print the substraction of the number from the variable
        echo $variable1 ;
        echo "<br>";

        // Another way to write the code using functions of increment and decrement 
        echo "<h4>This is the way which gives the result in two statements line</h4>";
        echo "<h3> Another way for the single line output";
        echo "<h4> The below is the technique which gives the value in the single lien";
        // there is no need to call the variable again in the code it does that thing in the same lien
        echo "<br>";
        echo "<br>";

        echo "++variable1 is : ";
        echo ++$variable1 ;
        echo "<br>";

        echo "--variable1 is : ";
        echo --$variable1 ;


    // Logical Operators 
        //    and (&&)
        //    or (||)
        //    xor 
        //    not (!)
        echo "<h1>Logical Operators</h1>";
        echo "<h3> and (&&) Operator</h3>";
        // in this operator if the both conditions are true then it will print true otherwise it will print false
        $myvar = (true and true);
        // $myvar = (false and true);
        // $myvar = (true and false);
        echo var_dump($myvar);
        echo "<br>";

        echo "<h3> or (||) Operator</h3>";  
        // in this operator if the both conditions are true then it will print true otherwise it will print
        $myvar = (true or false);
        // $myvar = (false or true);
        // $myvar = (false or false);
        echo var_dump($myvar);
        echo "<br>";

        echo "<h3> xor Operator</h3>";
        // in this operator if the both conditions are true then it will print false otherwise it will print
        $myvar = (true xor false);
        // $myvar = (false xor true);
        // $myvar = (false xor false);
        echo var_dump($myvar);
        echo "<br>";    

        echo "<h3> not (!) Operator</h3>";
        // in this operator if the condition is true then it will print false otherwise it will print tru
        $myvar = !(true);
        // $myvar = !(false);
        echo var_dump($myvar);
        echo "<br>";    
        ?>

        <?php
    // Data types in php
        // 1.String
        // 2.Integer
        // 3.Float
        // 4.Boolean
        // 5.Array
        // 6.Object
        echo "<h1> Data Types in Php</h1>";
        echo "<h3> 1.String</h3>";
        echo "this might a stringg is a : ";
        $var = "this might a stringg ";
        echo var_dump($var);
        echo "<br>";

        echo "<h3> 2.Integer</h3>";
        echo "333 is a : ";
        $var = 333;
        echo var_dump($var);
        echo "<br>";

        echo "<h3> 3.Float</h3>";
        echo "333.333 is a : ";
        $var = 333.333;
        echo var_dump($var);
        echo "<br>";

        echo "<h3> 4.Boolean</h3>";
        echo "true is a : ";
        $var = true;
        echo var_dump($var);
        echo "<br>";

        ?>
        <?php
        echo PI;
        
        ?>

        
    </div>
</body>
</html>