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
        <form action="ajouter.php" method="POST">
            <div class="modal-body">
                <div class="form-group">
                    <label>type</label>
                    <input type="text" name="type" class="form-control" placeholder="entrer le type">
                </div>
                <div class="form-group">
                    <label>le nombre</label>
                    <input type="nombre" name="nombre" class="form-control" placeholder="entrer le nombre">
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
      ajouter chamber
      </button>
    </p>
    


    <div class="card-body">
      <div class="table-responsive">

      <?php
      $connection = mysqli_connect("localhost","root","root","hotel");
      $query = "SELECT * FROM chombres";
      $query_run = mysqli_query($connection,$query); 
      ?>
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">id</th>
            <th scope="col">type</th>
            <th scope="col">nombre</th>
            <th scope="col">edit</th>
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
                  <td><?php echo $row['type']; ?> </td>
                  <td><?php echo $row['nomber']; ?> </td>
                  <td><button type="submit" class="btn bg-warning">edit</button></td>
                  
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