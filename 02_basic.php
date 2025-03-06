<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php second file</title>
</head>
<style>
    *{
        margin: 0;
        padding : 0;
        box-sizing:border-box;
    }
    .container{
        max-width : 80%;
        background-color:pink;
        margin : auto;
        padding : 20px;
    }
    </style>
<body>
    <div class="container">
        This is a container
        <h1>Lets learn about php</h1>
        <p> Your party age status is here...</p>
        <?php
    $age = 8;
    if($age > 18){
        echo "You can go to the party";
    }
    else if($age == 7){
        echo "You are too young to go to the party";
    }
    else{
        echo "You can't go to the party";
    }
    echo "<br>";
    // ARRAY IN PHP 
    $languages = array("python","c++","Html","Flask","CSS");
    echo $languages[1];
    echo "<br>";
    echo count($languages);
    echo "<br>"
    ?>

    <!-- LOOPS IS PHP -->
     <?php
    //  While loop
    $a = 0;
    while ($a <= count($languages)) {
        echo "the value of a is ";
        echo $a;
        echo "<br>";
        $a++;
    }

    // Inserting arrays in PHP
    $a = 0;
    while ($a < count($languages)) {
        echo "the value of Languages is ";
        echo $languages[$a];
        $a++;
        echo "<br>";

    }
     ?>
    </div>
</body>
</html>