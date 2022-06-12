<?php
    include "includes/header.php";
    include "includes/navbar.php";
?>

<div class="container-fluid">
  <div class="card-header py-3">
   
    <div class="card-body">
      <div class="table-responsive">

      <?php
      $connection = mysqli_connect("localhost","root","root","hotel");
      $query = "SELECT * FROM reservation";
      $query_run = mysqli_query($connection,$query); 
      ?>

      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">id</th>
            <th scope="col">check in</th>
            <th scope="col">chek out</th>
            <th scope="col">nombre</th>
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
                  <td><?php echo $row['check in']; ?> </td>
                  <td><?php echo $row['check out']; ?> </td>
                  <th><?php echo $row['nombre']; ?> </th>
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