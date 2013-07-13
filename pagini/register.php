

<!--FORM-->

<form action="" method="post">
    
<p1>Pentru a putea sa rezervati bilete va rugam sa va inregistrati.</p1><br>
<br>
Username*:<br>   
<input type="text" name="username" value=""><br>
Parola*:<br> 
<input type="text" name="parola" value=""><br>
Nume:<br> 
<input type="text" name="nume" value=""><br>
Prenume*:<br> 
<input type="text" name="prenume" value=""><br>

Adresa:<br> 
<input type="text" name="adresa value=""><br>

Email*:<br> 
<input type="text" name="email" value=""><br>
Telefon: 
<br> <input type="text" name="telefon" value=""><br>

 <input type="submit"  name="submit" value="Inregistrare"/> 
    
    
</form>

<!--VALIDARE-->

    <?php

if (isset($_GET["submit"])) {

// define variables and initialize with empty values
$numeErr =  $emailErr = $howManyErr = $favFruitErr = "";
$name = $address = $email = $howMany = "";

$favFruit = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["nume"])) {
        $numeErr = "Va rugam sa introduceti numele";
    }
 else {

        $name = $_POST["nume"];
    }


    if (empty($_POST["email"]))  {

        $emailErr = "Va rugam sa introduceti emailul";

    }

    else {

        $email = $_POST["email"];

    }

 
}
}
?>


