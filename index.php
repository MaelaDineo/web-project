<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>This is a <?php echo "AWESOME"; ?> paragraph</p>
    <?php
        echo "This is also a paragraph";
    ?>
    <?php
        $name = "Dineo Meela"; //declare and initialise variables
        echo  $name;//print name
    ?>
    <?php
    //scalar types (contains one value) datatypes
    $string = "Dineo";//default $name="";
    $int = 1234;
    $float = 2.1234;
    $bool = false;
    //$name = "Matsapola";

    //Array type
    $array = array("Daniel", "Dephney" , "Dolly", "Dineo");//or $names instead
    $names = ["Daniel", "Dephney" , "Dolly", "Dineo"];//old way

    //object type(object of class)
    //$object = new Car();

    //$array =[]; default
    //$object null; defaulr


    ?>
    <p>
        Hi! My name is <?php echo $name?> and i am learning PHP.
    </p>
    <?php
        echo $_SERVER["DOCUMENT_ROOT"];//output path - location of our website root
        echo "<br>"; //fornew line
        echo $_SERVER["PHP_SELF"];//exact location of the website
        echo "<br>";
        echo $_SERVER["SERVER_NAME"];//OUTPUT localhost
        echo "<br>";
        echo $_SERVER["REQUEST_METHOD"];//GET or POST
    ?>
<main>
    <form action="includes/formhandler.php" method = "post">
        <label for="firstname">Firstname?</label>
        <input required id="firstname" type="text" name="firstname" placeholder="Firstname...">
        <br/>
        <label for="lastname">Lastname?</label>
        <input id="lastname" type="text" name="lastname" placeholder="Lastname...">
        <br/>
        <label for="favouratepet">Favourate Pet?</label>
        <select id="favouratepet" name ="favouratepet">
            <option value="none">None</option>
            <option value="dog">Dog</option>
            <option value="cat">Cat</option>
            <option value="bird">Bird</option>
        </select>
        <br/>
        <button type="submit" >Submit</button>
    </form>
</main>
</body>
</html>