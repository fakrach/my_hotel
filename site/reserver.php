<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reserver.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>hotel</title>
</head>
<body>
    <?php 
        include "header.php";
    ?>
    <div id="main">
        <form action="ajouter.php" method="POST">
            <div id="form">
                <div>
                    <h3>check in</h3>
                    <input type="date" name="check_in" placeholder="votre nom">
                </div>
                <div>
                    <h3>check out</h3>
                    <input type="date" name="check_out" placeholder="votre email">
                </div>
                <div>
                    <h3>nombre</h3>
                    <input type="nomber" name="nombre" placeholder="nombre">
                </div><br>

                <div>
                    <h3>tele</h3>
                    <input type="text" name="tele" placeholder="votre numero">
                </div>
                <div>
                    <h3>no de carte</h3>
                    <input type="text" name="no_cart" placeholder="votre num de carte">
                </div>
                <div id="type">
                 <h4 style="color:white">simple:</h4>    <input type="radio"  name="type" value="simple" >
                 <h4 style="color:white">double:</h4>      <input type="radio"  name="type" value="double">
                 <h4 style="color:white">triple:</h4>     <input type="radio"  name="type" value="triple">
                </div>
            </div>
            <a name="" id="" class="btn btn-warning mt-3" href="index.php" role="button">envoyer</a>
        </form>
    </div>


    
    <footer>
        <h3 >Copyright © 2021</h3>
    </footer>
</body>
</html>