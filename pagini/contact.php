<?php 
//$action=$_REQUEST['action'];

if (!isset($_REQUEST['action']))      
    { 
    ?> 
<form  action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="action" value="submit"> 
    Numele dvs:<br> 
    <input name="name" type="text" value="" size="30"/><br> 
    Email:<br> 
    <input name="email" type="text" value="" size="30"/><br> 
    Mesajul:<br> 
    <textarea name="message" rows="7" cols="30"></textarea><br> 
    <input type="submit" value="Trimite email"/> 
    </form>

    <?php 
    }  
   else                
    { 
    $name=$_REQUEST['name']; 
    $email=$_REQUEST['email']; 
    $message=$_REQUEST['message']; 
    if (($name=="")||($email=="")||($message=="")) 
        { 
        echo "Toate campurile sunt obligatorii, va rugam completati <a href=\"\">the form</a> din nou."; 
        } 
    else{         
        $from="From: $name<$email>\r\n: $email"; 
        $subject="Mesaj trimis prin formularul de contatc"; 
       // mail("cristinaguseila@gmail.com", $subject, $message, $from); 
        echo "Email trimis!"; 
        } 
    }   
?> 