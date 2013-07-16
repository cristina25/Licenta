<div class="loc1" id="par">
<h1>Bine ati venit pe pagina  de locatii!</h1>
<br>
<p><b>Aici puteti verifica locatia concertului la care planuiti sa mergeti!</b></p>
<p> Locatii concerte curente:</p>

<table class="table">
	<tr>
		<th>Locatie:</th>
		<th>Oras:</th>
	</tr>
        

        
        <?php
	$query="SELECT nume,oras FROM locatii";
	$result=mysql_query($query);
	while($row=mysql_fetch_array($result))
	{
            ?>

                <tr>
		<td><?php echo $row['nume'];?> </td>
                <td><?php echo $row['oras'];?> </td>
                </tr>
<?php 	}


            
?>
                </table>

     <div class="span4">
    
       <p><a class="btn" href="index.php?pagina=home<?php echo $row['id'];  ?>">Back Home &raquo;</a></p>
      </div>
   <br>


