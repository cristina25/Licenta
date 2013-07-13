<div class="hero-unit">
	    <h1>Bine ati venit pe pagina de vizualizare</h1>
	    <p>Alege urmatoarea ta actiune</p>
	    <p>
	    	<a href='#r&b' class="btn btn-primary btn-large">R&B </a>
	    	<a href='#house' class="btn btn-primary btn-large">HOUSE </a>
	    	<a href='#pop' class="btn btn-primary btn-large">POP </a>
	    	<a href='#rock' class="btn btn-primary btn-large">ROCK </a>
                <a href='#rock' class="btn btn-primary btn-large">JAZZ </a>
                <a href='#rock' class="btn btn-primary btn-large">CLASIC </a>
	    </p>
         </div>

<div class="container" id="concerte">
    

<hr><h3><a href="#r&b" id="brand">R&B STYLE</a></h3>
<h4>Marci</h4>
<?php
        $gen = "r&b";
	
        $gen_id = obtine_id_gen($gen);
        $query="SELECT c.*  FROM trupe t,concerte c WHERE c.trupa=t.id 
            AND t.gen='$gen_id'";
        $result = mysql_query($query);
        while($row = mysql_fetch_array($result))
        { 
            
            $query = "SELECT adresa FROM imagini WHERE concert = $row[id]";
           // var_dump($query);
            $result2 = mysql_query($query);
            $adresa = mysql_fetch_row($result2);
            $adresa = $adresa[0];
            ?>
        <div class="span4">
          <h2> <?php echo $row['nume'];?> </h2>
          <img src="<?php echo $adresa;?>" class="preview-concert"/>
          <p><a class="btn" href="index.php?pagina=concert&&concert=<?php echo $row['nume'];  ?>">Detalii &raquo;</a></p>
        </div>
 <div class="span4">
          <h2> <?php echo $row['nume'];?> </h2>
          <img src="<?php echo $adresa;?>" class="preview-concert"/>
          <p><a class="btn" href="#">Detalii &raquo;</a></p>
        </div>
        <?php
            
        }
?>

 
	
<!--

	<table class="table-bordered table-hover brand-table">
	<tr>
		<th>#</th>
		<th>Name</th>
	</tr>


<div class="row">
        <div class="span4">
          <h2>Sunny Summer Nights</h2>
          <p></p>
          <p><a class="btn" href="#">Detalii &raquo;</a></p>
        </div>
        <div class="span4">
          <h2>Joe Cocker</h2>
          <p>text </p>
          <p><a class="btn" href="#">Detalii &raquo;</a></p>
       </div>
        <div class="span4">
          <h2>Vara Magica</h2>
          <p>text</p>
          <p><a class="btn" href="#">Detalii&raquo;</a></p>
        </div>
      </div>
-->
<?php
/*
$query="SELECT * FROM imagini";
 $result = mysql_query($query);
 while ($row = mysql_fetch_array($result)) {
 ?>   
<image src="<?php echo $row['adresa']; ?>" class="preview-concert">
<?php } ?>

*/
?>
</div>