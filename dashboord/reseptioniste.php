<?php
    include "includes/header.php";
    include "includes/navbar.php";
?>

<!-- Modal -->
<div class="modal fade" id="ajouter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ajouter chamber</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form action="ajouterResp.php" method="POST">
            <div class="modal-body">
                <div class="form-group">
                    <label>nom</label>
                    <input type="text" name="nom" class="form-control" placeholder="entrer le nom">
                </div>
                <div class="form-group">
                    <label>prenom</label>
                    <input type="text" name="prenom" class="form-control" placeholder="entrer le prenom">
                </div>
                <div class="form-group">
                    <label>login</label>
                    <input type="text" name="login" class="form-control" placeholder="entrer login">
                </div>
                <div class="form-group">
                    <label>password</label>
                    <input type="password" name="password" class="form-control" placeholder="entrer mode de passe">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="save" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
  </div>
</div>


<div class="container-fluid">
  <div class="card-header py-3">
    <p>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ajouter">
      ajouter un reseptioniste
      </button>
    </p>
    
    <div class="card-body">
      <div class="table-responsive">

      <?php
      $connection = mysqli_connect("localhost","root","root","hotel");
      $query = "SELECT * FROM reseptionistes";
      $query_run = mysqli_query($connection,$query); 
      ?>

      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">id</th>
            <th scope="col">nom</th>
            <th scope="col">prenom</th>
            <th scope="col">login</th>
            <th scope="col">password</th>
            <th scope="col">edit</th>
            <th scope="col">suprimer</th>
            
          </tr>
        </thead>
        <tbody>
          
        <?php
            if(mysqli_num_rows($query_run) > 0)
            {
              while($row = mysqli_fetch_assoc($query_run))
              {
                ?>
                <tr>
                  <th><?php echo $row['id']; ?> </th>
                  <td><?php echo $row['nom']; ?> </td>
                  <td><?php echo $row['prenom']; ?> </td>
                  <th><?php echo $row['login']; ?> </th>
                  <td><?php echo $row['password']; ?> </td>
                  <td><button type="submit" class="btn bg-warning">edit</button></td>
                  <td><button type="submit" class="btn bg-danger">suprimer</button></td>
                  
                </tr>
              <?php
              }
            }
          ?>
          
        </tbody>
      </table>

      
      </div>
    </div>
  </div>
</div>  



<?php
    include "includes/scripts.php";
    include "includes/.php"
?>