

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <!-- <form action="index.php" method="get">
        <label for="">username:</label>
        <input type="text" name="username">
        <label for="">password:</label>
        <input type="password" name="password">
        <input type="submit" value="Log in">
    </form> -->
<!-- 
    <form action="index.php" method="post">
        <label for="">username:</label>
        <input type="text" name="username">
        <label for="">password:</label>
        <input type="password" name="password">
        <input type="submit" value="Log in">
    </form> -->

    <!-- <form action="index.php" method="get">
        <label for="">items:</label>
        <input type="text" name="items">
        <input type="submit" value="total">
    </form> -->
    <!-- <form action="index.php" method="post">
        <label for="">x</label>
        <input type="text" name="x">
        <label for="">y</label>
        <input type="text" name="y">
        <label for="">z</label>
        <input type="text" name="z">
        <input type="submit" value="total">
    </form> -->

    <!-- <form action="index.php" method="post">
        <label for="">radius:</label>
        <input type="text" name="radius">
        <input type="submit" value="calculate">
    </form> -->

    <form action="index.php" method="post">
        <label for="">enter a country</label>
        <input type="text" name="country">
        <input type="submit">
    </form>

    <form action="index.php" method="post">
        <label for="">username: </label>
        <input type="text" name="username">
        <label for="">password: </label>
        <input type="password" name="password">
        <input type="submit" name="login" value="Log in">
    </form>

    <form action="index.pxp" method="post">
        <input type="ratio" name="crediCard" value="Visa">
        <input type="ratio" name="creditCard" value="Mastercard">
        <input type="ratio" name="creditCard" value="American Express">
        <input type="submit" name="confirm" value="confirm">
    </form>

    <form action="index.php" method="post">
        <input type="checkbox" name="food[]" value="pizza">pizza
        <input type="checkbox" name="food[]" value="hamburger">hamburger
        <input type="checkbox" name="food[]" value="hotdog">hotdog
        <input type="checkbox" name="food[]" value="taco">taco
        <input type="submit" name="submit">
    </form>

    <form action="index.php" method="post">
        username: <br>
        <input type="text" name="username"><br>
        age: <br>
        <input type="text" name="age"><br>
        email: <br>
        <input type="text" name="email"><br>
        <input type="submit" name="login" value="login">
    </form>
</body>
</html>


<?php
//    echo $_GET["username"] . "<br>";
//    echo "{$_GET["password"]} <br>";
//    echo "{$_POST["username"]} <br>";
//    echo "{$_POST["password"]} <br>";

    // $item = "pizza";
    // $price = 4.99;
    // $items = $_GET["items"];
    // $total = "null";

    // $total = $items * $price;

    // echo "you have ordered {$items} x {$item} <br>";
    // echo "total: {$total}"
    // $x = $_POST["x"];
    // $y = $_POST["y"];
    // $z = $_POST["z"];
    // $total = "null";

    // $radius = $_POST["radius"];
    // $circumferance = "null";
    // $area = "null";
    // $volume = "null";

    // $circumferance = 2 * pi() * $radius;
    // $circumferance = round($circumferance, 2);

    // $area = pi() * pow($radius, 2);
    // $area = round($area, 2);

    // $volume = 4/3 * pi() * pow($radius, 3);
    // $volume = round($volume, 2);

    // echo "circumferance = {$circumferance}cm <br>";
    // echo "Area = {$area}cm^2 <br>";
    // echo "Volume = {$volume}cm^3 <br>"

    // $total = abs($x); //liczba z czescia dzesietna
    // $total = round($x);  //cala liczba
    // $total = floor($x); //licza zaokraglana w dol
    // $total = ceil($x); //licza zaokraglana w gore
    // $total = sqrt($x); //squere root function - podnoszenie do kwadratu
    // $total = pow($x, $y); //podnoszenie do potegi
    // $total = max($x, $y, $z); //max value
    // $total = min($x, $y, $z); //min value
    // $total = pi(); //pi function - liczba pi
    // $total = rand(1, 255); //liczba randomowa

    // echo $total;


    // if statments

    $age = 19;

    if ($age >= 16) {
        echo "you may enter this site:";
    } else if ($age <= 0) {
        echo "that wasnt a valid age";
    } else if ($age >= 100) {
        echo "you are too old to enter this site";
    } else {
        echo "you must be 18+ to enter";
    }

    $hours = 50;
    $rate = 15;
    $weeklyPay = null;

    if ($hours <= 0) {
        $weeklyPay = 0;
    } else if ($hours <= 40) {
        $weeklyPay = $hours * $rate;
    } else {
        $weeklyPay = ($rate * 40) + (($hours - 40) * ($rate * 1.5));
    }

    echo "you made or not \${$weeklyPay} this week <br>";

    // logical operators && || ! 

    $temp = 35;

    if( $temp >= 0 && $temp <= 30) {
        echo "the weather is good";
    } else {
        echo "the weather is bad";
    }

    $age = 25;
    $citizen = false;

    if(!$age >= 18 || !$citizen ) {
        echo"zou can not vote";
    } else {
        echo"you can vote";
    }


    // switch replacement to using many elseif statements

     $grade = "A";

     switch($grade) {
        case "A":
            echo "zou did great";
            break;
        case"B";
            echo"you did good";
            break;
        case"C";
            echo"you did ok";
            break;
        case"D";
            echo"you did poorly";
            break;
        case"F";
            echo"you failed";
            break;
            default:
            echo"{$grade} is not valid";  
     }

    //  for loop repeat some cide a certain # of times


    for($i = 0; $i < 5; $i++) {
        echo"hello. <br>";
    }

    // while loop - do some code infinitly while some cons´dition remains true

    // $seconds = 0;
    // $running = true;

    // while($running) {
    //     if(isset($_POST["stop"])){
    //         $running = false;
    //     } else {
    //         $seconds++;
    //         echo $seconds . "<br>";
    //     }
    // }

    // array - variable which can hold more than one value at a time

    $foods = array("apple", "orange", "banana", "kiwi");

    $foods[0] = "pineapple";

    // array_push($foods, "pinapple", "kiwi"); add new elelment to array on last place
    // array_pop($foods); last element remove
    // array_shift($foods); remove last element of array
    // $foods = array_reverse(($foods));  reverse (odwrocenie) elements of array

    echo count($foods);

    echo $foods[2] ."<br>";

    echo "---------------------" . "<br>";

    foreach($foods as  $food) {
        echo $food . "<br>";
    }

    // associative array - an array made of key=> value parts

    $capitols = array("usa"=> "washington",
                        "poland"=>"warszawa",
                        "germanz"=>"berlin",
                        "spain"=>"mardit");



    $capitol = $capitols[$_POST["country"]];

    echo"the capitol is {$capitol}";

     $capitols["usa"] = "las vegas"; //replace element
     $capitols["china"] = "bejing"; //add new key value pair
     array_pop($capitols); //remove last pair of elements
     array_shift($capitols);  //remove first pair of elements

     $cantryes = array_keys($capitols); //key elements
     $values = array_values($capitols);  //vslue elements
     $capitols = array_flip($capitols); //flip the values and keys
     $capitols = array_reverse($capitols); //reverse elements. Last one are first now
     

     echo count($capitols);

     foreach($capitols as $key => $value) {
        echo"{$key} = {$value}" . "<br>";
     }

     foreach($values as $value){
        echo"{$value}". "<br>";
     }

     foreach($cantryes as $cauntry) {
        echo"{$cauntry}". "<br>";
     }

    foreach($capitols as $key => $value) {
        echo"{$key} = {$value}";
    }

    // isset- returns true if variable is declared and not null
    // empty - returns true if variable is not declared, false, null or ""

    // foreach($_POST as $key => $value) {
    //     echo"{$key} = {$value}";
    // }


    if(isset($_POST["login"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        if(empty($username)){
            echo"username is missing";
        } elseif (empty($password)){
            echo"password is missing";
        } else {
            echo"hello {$username}";
        }
    }

    // if(isset($_POST["confirm"])) {

    //     $creditCard = null;

    //     if(isset($_POST["creditCard"])) {
    //         $creditCard = $_POST["creditCard"];
    //         echo $creditCard;
    //     } else {
    //         echo "please make a selection";
    //     }

    
        // metod switch

        switch($creditCard) {
            // case "Visa":
            //     echo "you selected Visa";
            //     break;
            // case "Mastercard":
            //     echo "you selected Mastercard";
            //     break;
            // case "American Express":
            //     echo "you selected American Express";
            //     break;
            // default:
            //     echo "Please make a selection"
            // }
    }



     if(isset($_POST["submit"])) {

        if(isset($_POST["pizza"])) {
            echo "you like pizza";
        }
        if(isset($_POST["hamburger"])) {
            echo "you like hamburger";
        }
        if(isset($_POST["hotdog"])) {
            echo "you loke hotdog";
        }
        if(isset($_POST["taco"])) {
            echo "you like taco";
        } else {
            echo "please make a selection";
        }
        if(empty($_POST["pizza"])) {
            echo "you dont like pizza";
        }
        if(empty($_POST["hamburger"])) {
            echo "you dont like hamburger";
        }
        if(empty($_POST["hotdog"])) {
            echo "you dont like hotdog";
        }
        if(empty($_POST["taco"])) {
            echo "you dont like taco";
        } else {
            echo "please make a selection";
        }
     }

     if(isset($_POST["submit"])) {
        $food = $_POST["food"];

        foreach($food as $meal) {
            echo $meal;
        }
     }


    //  functions

    function happyBirthday($firstName, $age){
        echo "happy birthday {$firstName} you are {$age} old";
    }

    happyBirthday("Sebastian", 30); 

    function isEvan($number) {
        $result = $number % 2;
        return $result;
    }

    isEvan(11);
 


    function hypo($a, $b) {
        $c = sqrt($a ** 2 + $b ** 2);
        return $c;
    }

    hypo(3, 4);

    // sanitaze / validate


    if(isset($_POST["login"])) {
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
        $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

        echo "hello {$username}";
        echo "you are {$age}";
        echo "your emial is: {$email}";


        if(empty($age)){
            echo "your {$age} is valid";
        } else {
            echo "your {$age} is not valid";
        }

        if(empty($email)) {
            echo " your email: {$email} is valid";
        } else {
            echo "your email: {$email} is not valid";
        }
    }

    // include function



    


 ?>