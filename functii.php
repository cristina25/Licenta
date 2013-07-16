<?php include 'configuratie.php'; 
?>

<?php  

function conectare(){
 $DATABASE_NAME="tickets";
 mysql_select_db($DATABASE_NAME);
    
}

function getBiletById($bilet){
    conectare();
    $result=mysql_query("SELECT * FROM `bilete` WHERE `id`=$bilet");
    if($p = mysql_fetch_array($result)) return $p;
    else return null;
}



function login($username,$password){
        conectare();
        
        
	$password=md5($password);
	$query="SELECT id,permissions FROM useri WHERE username='$username' AND password='$password'";
	
	if($row = mysql_fetch_row(mysql_query($query)))
	{
		
		$_SESSION['user'] = $_POST['username'];
		$_SESSION['id']=$row[0];
                $_SESSION['permissions']=$row[1];
                $perms = $row[1];
                $query="SELECT id FROM rezervari where user=$row[0]";
                $result = mysql_query($query);
                if($row = mysql_fetch_row($result)) 
                        $_SESSION['rezervari'] = 0;
                
                //login admin && user
                if($perms == 2){
                header('Location: index.php?pagina=home');
                
                } else{
                     header('Location: index.php?pagina=user');
               
                }
	}
	else { 
		unset($_POST['username']);
		?>
		<p class="error-msg">User-password combination wrong</p>

	<?php } ?>
	<?php
}
      
function obtine_id_gen($gen){
        conectare();
	$query="SELECT id FROM genuri WHERE nume='$gen'";
	$result=mysql_query($query);
        $ids = mysql_fetch_row($result);
        return $ids[0];
    
    
}
      //FUNCTII PENTRU ADAUGARI IN REZERVARI
function adaugaRezervare($username,$nr_bil){
    $ui=uniqid();
    conectare();
    mysql_query("INSERT INTO `rezervari` VALUES(NULL,'$ui',$username,$bilet,0,$data,$nr_bil)");
    return $ui;
    ?>
                
   <script type="javascript">
    var x =window.prompt("rezervarea a fost facuta");
    </script>
  <?php
   }

//pt tabela bilete_
function setBileteRezervate($ui,$bilete){
    conectare();
    $result=mysql_query("SELECT * FROM rezervari WHERE key='$ui'");
    $rezervare=  mysql_fetch_array($result);
    if($rezervare==null) return false;
    foreach ($bilete as $p) {
        mysql_query("INSERT INTO rezervari VALUES (NULL,{$p['nr_bil']},{$p['id']},{$_rezervare['id']})");
    }
   return true; 
}
    

function getBilete(){
    conectare();
    $bilete=array();
    $result=mysql_query("SELECT * FROM bilete");
    while($p=mysql_fetch_array($result)){
        $bilete[]=$p;
    }
    return $bilete;
}



?>