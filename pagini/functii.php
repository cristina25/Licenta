<?php include 'configuratie.php'; ?>

<?php  
function login($username,$password){
if(!isset($_SESSION['user']) && isset($_POST['username']))
       mysql_select_db($DATABASE_NAME);
	$password=md5($_POST['password']);
	$query="SELECT id_client FROM clienti WHERE username='$_POST[username]' AND password='$password'";
	
	if(mysql_fetch_row(mysql_query($query)))
	{
		
		$_SESSION['user'] = $_POST['username'];
		
		header('Location: index.php?pagina=admin');
	}
	else { 
		unset($_POST['username']);
		?>
		<p class="error-msg">User-password combination wrong</p>

	<?php } ?>
	<?php
}
        
        
    
 ?>