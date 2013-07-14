<?php
mysql_select_db($DATABASE_NAME);

if(isset($_GET['concert'])){
     $query="SELECT * FROM  concerte WHERE id= '$_GET[concert]'";
     $result = mysql_query($query);
     $row = mysql_fetch_array($result);
?>


<h1><?php echo $row['nume'];?> </h1>

<p><?php echo ($row['descriere']);?> </p>


<?php } ?>


<?php
 $query = "SELECT nume,oras FROM locatii WHERE id = $row[locatie]";
 $result = mysql_query($query);
 $locatie=  mysql_fetch_row($result);
?>

<p><?php echo $locatie[0] . ", ". $locatie[1];?> </p>


<?php 
  
 $query = "SELECT adresa FROM imagini WHERE concert = $row[id]";
 $result2 = mysql_query($query);
 $adresa = mysql_fetch_row($result2);
 $adresa = $adresa[0];
 
 ?>

    <div class="container-fluid">
    <div class="row-fluid">
    <div class="span2" id="concert-span2">
    <!--Sidebar content-->
     <img src="<?php echo $adresa;?>" class="poza-concert"/>
    </div>
    <div class="span10" id="concert-span10">
    <!--Body content-->
    <label>Data concert:</label>
    <p><?php echo $row['data'];?> </p>
    <label>Nr. de bilete disponibile:</label>
   <p><?php echo $row['bil_disp'];?> </p>
    </div>
    </div>
    </div>