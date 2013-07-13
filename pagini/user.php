<!--LOGIN-->
<?php  if(!isset($_SESSION['user']) && isset($_POST['username']))
     {

        include 'pagini/functii.php';
        login($_POST['username'],$_POST['password']);
      }
	
?>
	
 
<?php if(!isset($_SESSION['user']) && !isset($_POST['username'])) {  ?>

                <link  rel="stylesheet" href="css/user_login_form.css"/>

<div class="container" id="login-page">
		<div class="content">
			<div class="row">
				<div class="login-form">
					<h2>Login</h2>
					<form action="" method='post'>
						<fieldset>
							<div class="clearfix">
								<input type="text" name='username'placeholder="Username">
							</div>
							<div class="clearfix">
								<input type="password" name='password' placeholder="Password">
							</div>
							<button class="btn primary" type="submit">Sign in</button>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
</div> <!-- /container -->
<?php }
	else if(isset($_SESSION['user']))
	{
		?>
		<div class="row-fluid">
	        <div class="span3">
	          <div class="well sidebar-nav affix mymenu">
	          	<h4>Masini</h4>
	            <ul class="nav nav-list">
	              <li class="nav-header">Vizualizare detalii</li>
	              <li class="active"><a href="?page=user&&action=view#brand">Vezi marci si modele</a></li>
	              <li><a href="?page=user&&action=view#engine">Vezi motoare</a></li>
	              <li><a href="?page=user&&action=view#extras">Vezi extra-optiuni</a></li>
	              <li><a href="?page=user&&action=view#packages">Vezi pachete existente</a></li>
	              <li><a href="?page=user&&action=joins">Join (4 left)</a></li>
	              <li><a href="?page=user&&action=hard">Hard (4 left)</a></li>
	              <li class="nav-header">Adauga</li>
	              <li><a href="?page=user&&action=add#brand">Adauga marca sau model</a></li>
	              <li><a href="?page=user&&action=add#engine">Adauga motor</a></li>
	              <li><a href="?page=user&&action=add#extras">Adauga extra-optiune</a></li>
	              <li><a href="?page=user&&action=add#packages">Adauga un pachet nou</a></li>
	              <li class="nav-header">Editeaza</li>
	              <li><a href="?page=user&&action=edit#brand">Editeaza</a></li>
	              <li><a href="?page=user&&action=edit#engine">Editeaza motor</a></li>
	              <li><a href="?page=user&&action=edit#extras">Editeaza extra-optiune</a></li>
	              <li><a href="?page=user&&action=edit#packages">Editeaza un pachet nou</a></li>
	              <li class="nav-header">Sterge</li>
	              <li><a href="?page=user&&action=delete#brand">Sterge</a></li>
	              <li><a href="?page=user&&action=delete#engine">Sterge motor</a></li>
	              <li><a href="?page=user&&action=delete#extras">Sterge extra-optiune</a></li>
	              <li><a href="?page=user&&action=delete#packages">Sterge un pachet</a></li>

	            </ul>
	          </div><!--/.well -->
	        </div><!--/span-->
	        <div class="span9">
	          <?php if(!isset($_GET['action']) || $_GET['action']=='home') include 'opening.php'; 
	          	else include $_GET["action"] . '.php'; ?>
	      </div><!--/row-->
		<?php
	}
 ?>