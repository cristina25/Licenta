<div class="hero-unit" id="co1">
    <p>
    <p class="cls id" cls_id">Selecteaza:</p>
    <a href='#concerte' class="btn btn-primary btn-large">Concerte </a>
    <a href='#locatii' class="btn btn-primary btn-large">Locatii </a>
    <a href='#trupe' class="btn btn-primary btn-large">Trupe </a>
</p>    
</div>


<br>
<a href="#locatii" id="locatii"></a>
<h2>Locatii disponibile:</h2>

<table class="table">
	<tr>
		<th>Nume:</th>
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
 

<!--TRUPE-->

<h2>Trupe anuntate:</h2>
<a href="#trupe" id="trupe"></a>
<table class="table">
	<tr>
		<th>Nr:</th>
		<th>Nume:</th>
                <th>Gen:</th>
                
	</tr>




<?php
	$query="SELECT * FROM trupe";
	$result=mysql_query($query);
	while($row=mysql_fetch_array($result))
	{
            ?>

                <tr>
		<td><?php echo $row['id'];?> </td>
                <td><?php echo $row['nume'];?> </td>
                <td><?php echo $row['gen'];?> </td>
                </tr>
<?php 	}
            
?>
       </table>


<!--CONCERTE-->

<h3>Concerte:</h3>
<a href="#concerte" id="concerte"></a>
<table class="table">
	<tr>
		<th>Id:</th>
		<th>Nume:</th>
                <th>Locatie:</th>
                <th>Trupa:</th>
                <th>Data:</th>
                <th>Bilete disp:</th>
                <th>Bilete vandute</th>
	</tr>




<?php
	$query="SELECT * FROM concerte";
	$result=mysql_query($query);
	while($row=mysql_fetch_array($result))
	{
            ?>

                <tr>
		<td><?php echo $row['id'];?> </td>
                <td><?php echo $row['nume'];?> </td>
                <td><?php echo $row['locatie'];?> </td>
                <td><?php echo $row['trupa'];?> </td>
                <td><?php echo $row['data'];?> </td>
                <td><?php echo $row['bil_disp'];?> </td>
                <td><?php echo $row['bil_vand'];?> </td>
                </tr>
<?php 	}
            
?>
       </table>