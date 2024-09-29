<?php //no need to close bcz doesnt include html

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstname = htmlspecialchars($_POST["firstname"]);//html... for safety of user input that may causedamage
    $lastname = htmlspecialchars($_POST["lastname"]);
    $favouratepet = htmlspecialchars($_POST["favouratepet"]);
    //htmlentities()

    if(empty($firstname)){
        exit();
        header("Location: ../index.php");//to stay at the same page
    }

    echo "Theseare the data that the user submitted:";
    echo "<br/>";
    echo $firstname;
    echo "<br/>";
    echo $lastname;
    echo "<br/>";
    echo $favouratepet;

    header("Location: ../index.php");//to stay at the same page

}else {
        header("Location: ../index.php");//to stay at the same page

    }

