
<!--LOGIN-->
<?php  if(!isset($_SESSION['user']) && isset($_POST['username']))
     {
        //include_once 'pagini/functii.php';
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
	        <div class="span3" >
	          <div class="well sidebar-nav affix mymenu" id="user_span3">
                      
	          	<h4>Bine ati venit pe pagina de admin! </h4
                        
	            <ul class="nav nav-list">
	              <li class="nav-header"> Vizualizare baza de date </li>
	              <li class="active"><a href="?pagina=user&&action=vizualizare#brand">Vezi concerte disponibile</a></li>
	              <li><a href="?pagina=user&&action=vizualizare#engine">Vezi locatii dispobibile</a></li>
	              <li><a href="?pagina=user&&action=vizualizare#extras">Vezi trupe</a></li>
	              
                      
	              <li class="nav-header">Adauga</li>
	              <li><a href="?pagina=user&&action=adaugare#concerte">Adauga concert</a></li>
	              <li><a href="?pagina=user&&action=adaugare#locatii">Adauga locatii</a></li>
	              <li><a href="?pagina=user&&action=adaugare#trupe">Adauga trupe</a></li>
	              
                      
	              <li class="nav-header">Sterge</li>
	              
	              <li><a href="?pagina=user&&action=stergere#concerte">Sterge concerte</a></li>
	              <li><a href="?pagina=user&&action=stergere#locatii">Sterge locatii</a></li>
	              <li><a href="?pagina=user&&action=stergere#trupe">Sterge trupe</a></li>

	            </ul>
	          </div><!--/.well -->
	        </div><!--/span-->
	        <div class="span9">
	          <?php if(!isset($_GET['action']) || $_GET['action']=='home') include 'admin/vizualizare.php'; 
	          	else include 'admin/'.$_GET["action"] . '.php'; ?>
	      </div><!--/row-->
		<?php
	}
 ?>