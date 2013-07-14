
      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit" id="home">
           
          <h1 class="eu"> Bilete la concertele tale preferate! </h1> 
        <p>Cauta concerte:</p>
        
        
        <!--BARA SEARCH-->
        
        <form class="well form-search" action="" method="POST">
      <input type="text" class="span3 search-query" name="search" placeholder="Cautare"/>
      <button type="submit" class="btn">Search</button>
      </form>
      
        
        <p><b>Ultimele concerte adaugate:</b> </p>        
  <?php    
       
    mysql_select_db("Tickets") or die("Baza de date nu a fost gasita!");
    $output='';
    
    if(isset($_POST['search'])){
        $searchq=$_POST['search'];
        $searchq=preg_replace("#[^0-9a-z]#i","",$searchq);
        $query=mysql_query("SELECT * FROM concerte WHERE nume LIKE '%$searchq%'") or die("Nu s-a putut realiza cautarea");
        $count=mysql_num_rows($query);
        if($count==0){
            $output="Nu s-a gasit nici un rezultat!";
        }else{
            while($row=mysql_fetch_array($query)){
                $cname=$row['nume'];
                $id=$row['id'];
                $output .='<div>'.$cname.'</div>';
                header("Location: index.php?pagina=concert&&concert=".$id);
            }
            
        }
        echo $output;
    }
?>
      

    <?php
        
        $query="SELECT *  FROM concerte ORDER BY id DESC";
        $result = mysql_query($query);
        $i=0;
        while(($row = mysql_fetch_array($result)) && $i<6)
        { 
            
            $query = "SELECT adresa FROM imagini WHERE concert = $row[id]";
           // var_dump($query);
            $result2 = mysql_query($query);
            
            if($result2!=false){
                
            $adresa = mysql_fetch_row($result2);
            $adresa = $adresa[0];
            
            }
            else{
                $adresa="#";
            }
            $i++;
            
  ?>

            <div class="span4">
          <h2><?php echo $row['nume'];?></h2>
          <img src="<?php echo $adresa;?>" class="preview-concert"/>
          
          <p><a class="btn" href="index.php?pagina=concert&&concert=<?php echo $row['id'];  ?>">Detalii &raquo;</a></p>
        </div>
        
        <?php
            
        }
?>
       
       
 <!-- Example row of columns
      <div class="row">
          
        <div class="span4">
          <h2><?php /*echo $row['nume'];*/?></h2>
          <img src="<?php // echo $adresa;?>" class="preview-concert"/>
          <p><a class="btn" href="#">Detalii &raquo;</a></p>
       </div>
          
        <div class="span4">
          <h2><?php // echo $row['nume'];?></h2>
          <img src="<?php // echo $adresa;?>" class="preview-concert"/>
          <p><a class="btn" href="#">Detalii &raquo;</a></p>
        </div>
      </div>
 
 
 -->