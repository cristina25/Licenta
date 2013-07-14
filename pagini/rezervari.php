<h1>Pagina de rezervari!</h1>



<?php
    if(isset($_SESSION['rezervari']))
             $_SESSION['rezervari'] = 1;
  if(isset($_GET['concert'])){
   if(!isset($_SESSION['rezervari']))
       $_SESSION['rezervari'] = 1;
   $query="SELECT id from bilete WHERE concert =$_GET[concert]";
   $result=mysql_query($query);
   $row=  mysql_fetch_row($result);
   $bilet=$row[0];
  
   $query="SELECT nr_bil,id FROM rezervari WHERE user='$_SESSION[id]' AND bilet=$row[0]";
   $result=mysql_query($query);
   if($row=mysql_fetch_row($result)){
            
       //update
      $bilete = $row[0] + 1;
      $query= "UPDATE rezervari SET nr_bil=$bilete WHERE id=$row[1]";
      mysql_query($query);
  }
  else{
      //insert
                 $status=0;
            $nr_bil=1;
            $data=new DateTime();
            $dataf = $data -> format('Y-m-d');
	
           
            $query="INSERT INTO rezervari
			(id,user,bilet,status,data,nr_bil)
			VALUES(NULL,'$_SESSION[id]','$bilet',$status,$dataf,1)";
            
        if(mysql_query($query)) {
		?>
   
		<?php
	}

  }}
if (isset($_GET['stergere'])){
    
    $query="DELETE FROM rezervari WHERE id='$_GET[stergere]]'";
    if(mysql_query($query)){
        ?>
        <p class="error-msg"> SUCCES </p>
       <?php
        
    }
}
  ?>
 

<!--AFISARE REZERVARI-->

<?php 

if(!isset($_SESSION['rezervari']) || $_SESSION['rezervari'] == null){ ?>
<p>Nu avem bilete rezervate!</p>
<?php }else{ ?>
    
<table class="table table-striped" >
    <tr>
        <td>CONCERT</td>
        <td>PRET</td>
        <td>NR.BILETE REZERVATE</td>
        <td>Modificari</td>
        
        </tr>
<?php
$query="SELECT * FROM rezervari WHERE user=$_SESSION[id]";
$result=mysql_query($query);
while($p=mysql_fetch_array($result))
{
   // var_dump($p);
    
    $query3 = "SELECT pret,concert FROM bilete WHERE id = $p[bilet]";
    $result2 = mysql_query($query3);
    $pret = mysql_fetch_row($result2);
    
    $query2 = "SELECT nume FROM concerte WHERE id = $pret[1] ";
    $result1 = mysql_query($query2);
    $concert = mysql_fetch_row($result1);
    $_SESSION['rezervari'] = $_SESSION['rezervari'] + $p['nr_bil']*$pret[0];
    
    ?>

    
        <tr>
        <td><?php print $concert[0]; ?></td>
        <td><?php print $pret[0]; ?>Lei</td>
      
       <td><?php print $p['nr_bil']; ?></td>
        <td><a href="index.php?pagina=rezervari&&stergere=<?php print $p['id'];?>">Sterge rezervare </a></td>
        
        </tr>

<?php
  }
?>
    </table>

    
   



  
  <?php
   //Afisare valoare totala de plata
   $pretTotal=$_SESSION['rezervari'] - 1;
   ?>


<!--Afisez pretul total-->
<h3>Pret Total Comanda: <?php print $pretTotal; ?>Lei</h3>
<a href="index.php?pagina=livrare">Trimite comanda!</a>
<?php } ?>




 <!--Stergere din cart-->
<?php
 if(isset($_GET['rezervari'])){
    if(isset($_SESSION['book'][$_GET['deletebookings']]))
    unset($_SESSION['book'][$_GET['deletebookings']]);
header("location: index.php?pagina=rezervari");
    
}

//Verificare sa nu se ajunga in pag de livrare decat daca aceasta contine ceva
  if(isset($_GET['p']))
    if($_GET['p']=='livrare' && 
        (!isset($_SESSION['rezervari']) || $_SESSION['rezervari'])==null){
        header("location: index.php?pagina=rezervari");
    
        
    }
    
    
    //livrare
    if(isset($_GET['p']) && ($_GET['p'])=="livrare" && isset($_POST['livreaza'])){
        //daca suntem in pag de livrare si s-a apasat but livreaza obtine adresa de livrare
    $adresa=$_POST['adresa'];
    $adresa=addslashes($adresa);
    echo 'Comanda expediata!';
    require_once 'functii.php';
    }
    ?>
    
 