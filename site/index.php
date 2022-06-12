<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>hotle</title>

</head>
<body>
    <?php
        include "header.php";
    ?>

    <section id="main_section">
        <h1 id="title">ENJOY A LUXURY </h1>
        <h1 id="title1">EXPERIONCE</h1>
        <form action="#">
            <div>
                <h2>check in</h2>
                <input type="date" >
            </div>
            <div>
                <h2>scheck out</h2>
                <input type="date" >
            </div>
            <div>
                <h2>gusets</h2>
                <input type="nomber" placeholder="guests">
            </div>
            <div>
                <h3 id="h2btn">availibility</h3>
                <a href="reserver.php"><input id="btn" type="button" value="check it"></a>
            </div>
            
        </form>
    

    </section>



    <section class="room-section" id="room">
        <div class="base">
            <h2 class="room" style="color: white;" >ROOMS</h2>
            <div class="case-main">
                <div class="case">
                 
                    <div class="text">
                        <h1 class="title">simple</h1>
                        <p class="paragraphe">Lits confortables, notés 7.8 (d'après 208 commentaires)
Toutes les chambres sont climatisées et équipées d'une télévision </p>
                    </div>
                    
                </div>

                <div class="case">
                    
                    <div class="text">
                        <h1 class="title">double</h1>
                        <p class="paragraphe">Lits confortables, notés 7.8 (d'après 208 commentaires)
Cette chambre double comprend un balcon, une entrée privée et un coin repas</p>
                    </div>
                    
                </div>

                <div class="case">
              
                    <div class="text">
                        <h1 class="title">triple</h1>
                        <p class="paragraphe">Lits confortables, notés 7.8 (d'après 208 commentaires)
Cette chambre triple dispose d'une télévision par satellite et de la climatisation.</p>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    <section class="join-section" id="join">
        <div class="base">
            <h2>JOIN US</h2>
            <div class="join-main"> 
                <div class="join-content">
                    <h1 class="join-title"> Let's get in touch</h1>
                    <p class="join-paragraphe">I enjoy discussing new projects and design <br> challenges. Please share as much info, as <br> possible so we can get the most out of our first <br> catch-up.</p>
                </div>

                <div class="emailbox">
                    <h1>offre</h1>
                    <p>
                    Abonnez-vous pour recevoir des offres <br> directement dans votre boîte mail
                    </p>
                    <form action="#">
                        <div>
                            <input type="email" placeholder="enter your email">
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </section>
    <section id="contact-section">
            <h1>contact us</h1>
            <div id="contact-main">
                <div id="info">
                    <h2>our address</h2>
                    <p>
                    45 Brooklyn Station, New York 150-0042 US <br>revs@hoteller.com
                    </p>
                    <h2>Tel:</h2>
                    <p>+37 598047490</p>
                    <h2>Fax:</h2>
                    <p>+37 957349373</p>
                </div>

                <div id="form">
                    <h2>Do you have any wishes or questions?</h1>
                    <form action="#">
                        <div>
                            <h3>nom:</h3>
                            <input type="text" placeholder="votre nom"><br>
                        </div>
                        <div>
                            <h3>email:</h3>
                            <input type="email" placeholder="votre email"><br>
                        </div>
                        <div>
                            <h3>votre message:</h3>
                            <input type="text" placeholder="votre message"><br>
                        </div>
                        <a name="" id="" class="btn btn-primary mt-3" href="#" role="button">envoyer</a>
                    </form>
                </div>
            </div>
    </section>

    <footer>
        <h3 >Copyright © 2021</h3>
    </footer>
</body>
</html>