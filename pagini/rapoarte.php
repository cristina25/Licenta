<!--Concerte din data de 26.07.2013-->

<p><b> Raport Nr.1 </b>: Vizualizare concerte din data de '26-07-2013.'</p>
<table class="table">
     <tr>
		<th>Concert:</th>
		<th>Locatia:</th>
                <th>Trupa:</th>
                <th>Data concert:</th>
	</tr>
        
        <?php

$query = "SELECT nume,locatie,trupa,data FROM concerte WHERE data='2013-07-26' ";
$result = mysql_query($query);
while($row=mysql_fetch_array($result))
{
   $query2 = "SELECT nume from trupe WHERE id = $row[trupa]";
  $result2 = mysql_query($query2);
  $trupa = mysql_fetch_row($result2);
  // in $trupa[0] ai numele trupei

  $query2 = "SELECT nume,oras from locatii where id =  $row[locatie]";
  $result2 = mysql_query($query2);
  $locatie = mysql_fetch_row($result2);
  // in $locatie[0] ai numele locatiei
 // in $locatie[1] ai numele orasului

?>
                     
         <tr>
                <td><?php echo $row['nume'];?> </td>
                <td><?php echo $locatie[0]." ".$locatie[1];?> </td>
                <td><?php echo $trupa[0];?> </td>
                <td><?php echo $row['data'];?> </td>
               
                </tr>

<?php
      }
?>
</table>


<br>
<br>
<p><b> Raport Nr.2 </b>: Vizualizare formatii pe fiecare categorie 'r&b'.</p>

<table class="table">
     <tr>
		<th>Trupa:</th>
		<th>Gen:</th>
                
	</tr>
        
        <?php

$query = "SELECT trupa,gen FROM trupe WHERE gen=3 ";
$result = mysql_query($query);
while($row=mysql_fetch_array($result))
{
   $query2 = "SELECT  from trupe WHERE id = $row[trupa]";
  $result2 = mysql_query($query2);
  $trupa = mysql_fetch_row($result2);
  // in $trupa[0] ai numele trupei

  $query2 = "SELECT nume,oras from locatii where id =  $row[locatie]";
  $result2 = mysql_query($query2);
  $locatie = mysql_fetch_row($result2);
  // in $locatie[0] ai numele locatiei
 // in $locatie[1] ai numele orasului

?>
                     
         <tr>
                <td><?php echo $row['nume'];?> </td>
                <td><?php echo $locatie[0]." ".$locatie[1];?> </td>
                <td><?php echo $trupa[0];?> </td>
                <td><?php echo $row['data'];?> </td>
               
                </tr>

<?php
      }
?>
</table>