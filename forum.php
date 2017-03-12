<?php
session_start();
?>
<?php
require "header2.php";
?>
<!-- / header -->
<!-- content -->
		   <div class="form-group">
		   <form action="forum.php" method="post">
           <label  for="comment">Bienvenue </label> <strong><?php echo $_SESSION['user']; ?> </strong>
           <label>..Tapez votre message dans le champs:</label>
           <textarea name="msg" class="form-control" rows="5" id="comment"></textarea></p>
           <button class="btn btn-primary"> publier </button> &nbsp; &nbsp; &nbsp; <button class="btn btn-danger"><a class="monstyle" href="deconnexion.php"> Deconnecter </a>

           <?php
           $postulantName=$_SESSION['user']; 
             if (isset($_POST['msg'])){
                $monMsg= $_POST['msg'];
                $bdd = new PDO ('mysql:host=localhost;dbname=anglet','root','');
               $req=$bdd->query("INSERT INTO message (Contenu,postulant) VALUES('$monMsg','$postulantName')");
                  }

           ?>	
			
	
           </form>
           </div>
	<div class="col-md-12" >
	<div class="panel panel-primary">
       <div class="panel-heading">liste des messages</div>
         <div class="panel-body">
            <table class="table table-striped">
              
              <tr>
                	<th class="info">RefMessage</th>
                	<th class="info">Contenu</th>
                	<th class="info">publié par:</th>
              	</tr>
              <?php
                  mysql_connect ("localhost","root","");
                  mysql_select_db("anglet");
                  $req=mysql_query("SELECT * from message ORDER BY id DESC ");
                  	while($res = mysql_fetch_array ($req)){
                 
                  ?>
              	

                 <tr>
                    <td class="active"><?php echo $res['id']; ?></td>   
                 	 <td class="active"><?php echo $res ['Contenu'];  ?></td>
                 	  <td class="active"><?php echo $res['postulant'];?></td>
                </tr>
                
                  <?php } ?>
              </table>
              
			</div>
            </div>
            </div>



<!-- / content -->
<!-- footer -->
		<?php
		require"footer.php";
		?>