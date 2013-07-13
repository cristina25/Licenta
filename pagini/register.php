

<!--FORM-->
<p1 class="anunt">*Pentru a putea sa rezervati bilete va rugam sa va inregistrati.</p1><br>
<link  rel="stylesheet" href="css/user_login_form.css"/>
<div class="container" id="login-page">
        <div class="content">
            <div class="row">
                <div class="login-form">
                    <h2>Register</h2>
                    <form action="" method='post'>
                        <fieldset>
                            <div class="clearfix">
                                <input type="text" name='username' placeholder="Username">
                            </div>
                            <div class="clearfix">
                                <input type="password" name='password' placeholder="Parola">
                            </div>
                            <div class="clearfix">
                                <input type="text" name="nume" placeholder="Nume">
                            </div>
                             <div class="clearfix">
                                <input type="text" name="prenume" placeholder="Prenume">
                            </div>
                             <div class="clearfix">
                                <input type="text" name="adresa" placeholder="Adresa">
                            </div>
                             <div class="clearfix">
                                <input type="text" name="email" placeholder="Email">
                            </div>
                             <div class="clearfix">
                                <input type="text" name="telefon" placeholder="Telefon">
                            </div>
                            <button class="btn primary" type="submit">Register</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
</div> <!-- /container -->



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


