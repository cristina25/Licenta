
<div class="hero-unit" id="adaugare">
<p>
    <h1>Selecteaza:</h1>
    <a href='#concerte' class="btn btn-primary btn-large">Concerte </a>
    <a href='#locatii' class="btn btn-primary btn-large">Locatii </a>
    <a href='#trupe' class="btn btn-primary btn-large">Trupe </a>
</p>
</div>

<!--Adauga locatie-->

<?php if(isset($_POST['nume']))
	{
	$query="INSERT INTO locatii
			(id,nume,oras)
			VALUES(NULL,'$_POST[nume]','$_POST[oras]')";
	if(mysql_query($query)) {
		?>
			<p class="error-msg">Inregistrare adaugata cu succes!</p>
		<?php
	}

	}?>
                        
   <!--Form adauga locatie--> 
   
<hr><a href="#locatii" id="locatii" >Locatii</a>
<form action="#locatii" method="POST">
  <fieldset>
  	<legend>Adauga locatie: </legend> 
        
 <div class="control-group">
   <div class="controls">
    <input type="text" name="nume" placeholder="Locatia.."></div>
    <div class="controls">
        
    <textarea rows="3" name="oras" placeholder="Orasul.."></textarea>  </div>
    <div class="controls">  
    <button type="submit" class="btn">Adauga</button></div></div>
  </fieldset>
</form


<!--FORM Adauga Trupa-->

<?php
$query="SELECT * FROM genuri";
$result=  mysql_query($query);
while($row=  mysql_fetch_array($result))
{
    $genuri[] = $row['nume'];
    $iduri[] = $row['id'];
}
?>
<hr><a href="#trupe" id="trupe" >Trupe</a>
<form action="#trupe" method="POST">
  <fieldset>
  	<legend>Adauga trupa: </legend> 
        
 <div class="control-group">
   <div class="controls">
    <input type="text" name="nume_gen" placeholder="Trupa.."></div>
    <div class="controls">
        <select name="gen">
            <?php
            $i=0;
            foreach ($genuri as $gen) {
                ?>
                <option value ="<?php echo $iduri[$i]?>" > <?php echo $gen; ?> </option>
            <?php
            $i++;}
            ?>
        </select>     
     </div>
    <div class="controls">  
    <button type="submit" class="btn">Adauga</button></div></div>
  </fieldset>
</form



<!--Adaugare trupa-->


<?php if(isset($_POST['nume_gen']))
	{
    var_dump($_POST['gen']);
	$query="INSERT INTO trupe
			(id,nume,gen)
			VALUES(NULL,'$_POST[nume_gen]','$_POST[gen]')";
	if(mysql_query($query)) {
		?>
    <p class="error-msg"> Inregistrare adaugata cu succes!</p>
		<?php
	}

	}?>


    <!--Adaugare concert-->
    
    <?php
$query="SELECT * FROM locatii";
$result=  mysql_query($query);
while($row=  mysql_fetch_array($result))
{
    $loc[] = $row['nume'];
    $idl[] = $row['id'];
}
?>
    
    
    
    <?php
    $query="SELECT * FROM trupe";
    $result=  mysql_query($query);
    while($row=  mysql_fetch_array($result))
{
    $trp[] = $row['nume'];
    $idt[] = $row['id'];
}
?>
    
    
    <!--FORM CONCERTE-->
    
    
    <hr><a href="#concerte" id="concerte" ></a>
<form action="#" method="POST">
  <fieldset>
  	<legend>Adauga concert: </legend> 
        
 <div class="control-group">
   <div class="controls">
    <input type="text" name="nume_c" placeholder="Concert.."></div>
   <div class="controls">
       <select name="locatie_c" placeholder="Locatie.."> 
   
    <?php
            $i=0;
            foreach ($loc as $loc1) {
                ?>
                <option value ="<?php echo $idl[$i]?>" > <?php echo $loc1; ?> </option>
            <?php
            $i++;}
   ?>
                
                
       </select></div>
     
        <div class="controls"><select name="trupa_c">
        
        <?php
            $i=0;
            foreach ($trp as $tr1) {
                ?>
                <option value ="<?php echo $idt[$i]?>" > <?php echo $tr1; ?> </option>
            <?php
            $i++;}
   ?>
            </select>
        </div>
        
        <div class="controls"><input type="text" name="b_disp" placeholder="Bilete disponibile.."></div>
       <div class="controls"> <input type="text" name="b_vand" placeholder="Bilete vandute.."></div>
        <div class="controls"><input type="text" name="data_c" placeholder="yyyy-mm-dd"></div>
     
     
    <div class="controls">
        
    <div class="controls">  
    <button type="submit" class="btn">Adauga</button></div></div>
  </fieldset>
</form


<?php 
?>

<?php
        if(isset($_POST['nume_c']))
	{
	$query="INSERT INTO concerte
			(id,nume,locatie,trupa,data,bil_disp,bil_vand)
			VALUES(NULL,'$_POST[nume_c]','$_POST[locatie_c]','$_POST[trupa_c]','$_POST[data_c]','$_POST[b_disp]','$_POST[b_vand]')";
        if(mysql_query($query)) {
		?>
    <p class="error-msg"> Inregistrare adaugata cu succes!</p>
		<?php
	}

	}?>
