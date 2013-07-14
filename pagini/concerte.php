<div class="hero-unit" id="co1">
	    <h1 id="h1">Bine ati venit!</h1>
	    <p>Va rugam alegeti o categorie!</p>
	    <p>
	    	<a href='#rANDb' class="btn btn-primary btn-large" id="myBtn">R&B </a>
	    	<a href='#house' class="btn btn-primary btn-large" id="myBtn">HOUSE </a>
	    	<a href='#pop' class="btn btn-primary btn-large" id="myBtn">POP </a>
	    	<a href='#rock' class="btn btn-primary btn-large" id="myBtn">ROCK </a>
                <a href='#clasic' class="btn btn-primary btn-large" id="myBtn">JAZZ </a>
                <a href='#jazz' class="btn btn-primary btn-large"id="myBtn">CLASIC </a>
	    </p>
         </div>

<div class="container" id="concerte">
    
<br/>
<div style="width:1200px">
<h3><a href="#" id="rANDb">R&b Style</a></h3>

<?php
        $gen = "r&b";
	$i=0;
        $gen_id = obtine_id_gen($gen);
        $query="SELECT c.*  FROM trupe t,concerte c WHERE c.trupa=t.id 
            AND t.gen='$gen_id'";
        $result = mysql_query($query);
        while($row = mysql_fetch_array($result))
        { 
            $i++;
            $query = "SELECT adresa FROM imagini WHERE concert = $row[id]";
           // var_dump($query);
            $result2 = mysql_query($query);
            $adresa = mysql_fetch_row($result2);
            $adresa = $adresa[0];
            ?>

        <div class="span4">
          <h2> <?php echo $row['nume'];?> </h2>
          <img src="<?php echo $adresa;?>" class="preview-concert"/>
          <p><a class="btn" href="index.php?pagina=concert&&concert=<?php echo $row['id'];  ?>">Detalii &raquo;</a></p>
          <p><a class="btn" href="index.php?pagina=rezervari&&concert=<?php echo $row['id'];  ?>">Rezerva &raquo;</a></p>
        </div>
 
        <?php
            
        }
        while($i%3!=0){ $i++; ?>
            <div class="span4" style="height:380px"></div>
       <?php } ?>

</div>
<br/>
<div style="width:1200px">
<h3><a href="#" id="house">House</a></h3>

<?php
        $gen = "house";
	$i=0;
        $gen_id = obtine_id_gen($gen);
        $query="SELECT c.*  FROM trupe t,concerte c WHERE c.trupa=t.id 
            AND t.gen='$gen_id'";
        $result = mysql_query($query);
        while($row = mysql_fetch_array($result))
        { 
            $i++;
            $query = "SELECT adresa FROM imagini WHERE concert = $row[id]";
           // var_dump($query);
            $result2 = mysql_query($query);
            $adresa = mysql_fetch_row($result2);
            $adresa = $adresa[0];
            ?>

        <div class="span4">
          <h2> <?php echo $row['nume'];?> </h2>
          <img src="<?php echo $adresa;?>" class="preview-concert"/>
          <p><a class="btn" href="index.php?pagina=concert&&concert=<?php echo $row['id'];  ?>">Detalii &raquo;</a></p>
          <p><a class="btn" href="index.php?pagina=concerte&&concert=<?php echo $row['id'];  ?>">Rezerva &raquo;</a></p>
        </div>
 
        <?php
            
        }
        while($i%3!=0){ $i++; ?>
            <div class="span4" style="height:380px"></div>
       <?php } ?>
<br/>
<h3><a href="#" id="rock">Rock</a></h3>

<?php
        $gen = "rock";
	$i=0;
        $gen_id = obtine_id_gen($gen);
        $query="SELECT c.*  FROM trupe t,concerte c WHERE c.trupa=t.id 
            AND t.gen='$gen_id'";
        $result = mysql_query($query);
        while($row = mysql_fetch_array($result))
        { 
            $i++;
            $query = "SELECT adresa FROM imagini WHERE concert = $row[id]";
           // var_dump($query);
            $result2 = mysql_query($query);
            $adresa = mysql_fetch_row($result2);
            $adresa = $adresa[0];
            ?>

        <div class="span4">
          <h2> <?php echo $row['nume'];?> </h2>
          <img src="<?php echo $adresa;?>" class="preview-concert"/>
          <p><a class="btn" href="index.php?pagina=concert&&concert=<?php echo $row['id'];  ?>">Detalii &raquo;</a></p>
          <p><a class="btn" href="index.php?pagina=concerte&&concert=<?php echo $row['id'];  ?>">Rezerva &raquo;</a></p>
        </div>
 
       <?php
            
        }
        while($i%3!=0){ $i++; ?>
            <div class="span4" style="height:380px"></div>
       <?php } ?>

</div>
<br/>
<h3><a href="#" id="jazz">Jazz</a></h3>

<?php
        $gen = "jazz";
	$i=0;
        $gen_id = obtine_id_gen($gen);
        $query="SELECT c.*  FROM trupe t,concerte c WHERE c.trupa=t.id 
            AND t.gen='$gen_id'";
        $result = mysql_query($query);
        while($row = mysql_fetch_array($result))
        { 
            $i++;
            $query = "SELECT adresa FROM imagini WHERE concert = $row[id]";
           // var_dump($query);
            $result2 = mysql_query($query);
            $adresa = mysql_fetch_row($result2);
            $adresa = $adresa[0];
            ?>

        <div class="span4">
          <h2> <?php echo $row['nume'];?> </h2>
          <img src="<?php echo $adresa;?>" class="preview-concert"/>
          <p><a class="btn" href="index.php?pagina=concert&&concert=<?php echo $row['id'];  ?>">Detalii &raquo;</a></p>
          <p><a class="btn" href="index.php?pagina=rezervari&&concert=<?php echo $row['id'];  ?>">Rezerva &raquo;</a></p>
        </div>
 
   <?php
            
        }
        while($i%3!=0){ $i++; ?>
            <div class="span4" style="height:380px"></div>
       <?php } ?>


<br/>
<h3><a href="#" id="clasic">Clasic:</a></h3>

<?php
        $gen = "clasic";
	$i=0;
        $gen_id = obtine_id_gen($gen);
        $query="SELECT c.*  FROM trupe t,concerte c WHERE c.trupa=t.id 
            AND t.gen='$gen_id'";
        $result = mysql_query($query);
        while($row = mysql_fetch_array($result))
        { 
            $i++;
            $query = "SELECT adresa FROM imagini WHERE concert = $row[id]";
           // var_dump($query);
            $result2 = mysql_query($query);
            $adresa = mysql_fetch_row($result2);
            $adresa = $adresa[0];
            ?>

        <div class="span4">
          <h2> <?php echo $row['nume'];?> </h2>
          <img src="<?php echo $adresa;?>" class="preview-concert"/>
          <p><a class="btn" href="index.php?pagina=concert&&concert=<?php echo $row['id'];  ?>">Detalii &raquo;</a></p>
          <p><a class="btn" href="index.php?pagina=concerte&&concert=<?php echo $row['id'];  ?>">Rezerva &raquo;</a></p>
        </div>
 
   <?php
            
        }
        while($i%3!=0){ $i++; ?>
            <div class="span4" style="height:380px"></div>
       <?php } ?>









  
 
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