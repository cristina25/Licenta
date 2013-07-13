<?php include 'configuratie.php'; 
//$DATABASE_NAME="tickets";?>

<?php  
function login($username,$password){
    $DATABASE_NAME="tickets";
    mysql_select_db($DATABASE_NAME);
	$password=md5($password);
	$query="SELECT id FROM useri WHERE username='$username' AND password='$password'";
	
	if(mysql_fetch_row(mysql_query($query)))
	{
		
		$_SESSION['user'] = $_POST['username'];
		
		header('Location: index.php?pagina=user');
	}
	else { 
		unset($_POST['username']);
		?>
		<p class="error-msg">User-password combination wrong</p>

	<?php } ?>
	<?php
}
      
function obtine_id_gen($gen){
   $DATABASE_NAME="tickets";
    mysql_select_db($DATABASE_NAME);
	$query="SELECT id FROM genuri WHERE nume='$gen'";
	$result=mysql_query($query);
        $ids = mysql_fetch_row($result);
        return $ids[0];
    
    
}
      
    
 ?>