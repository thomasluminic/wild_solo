<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/normalize.css">
    <script src="https://kit.fontawesome.com/c8a8d1abbe.js" crossorigin="anonymous"></script>
    <meta name="description" content="Bienvenue chez Wild Cruise choisissez une de nos croisières fluviale avec la meilleur équipe du monde">
    <meta name="author" content="Chloé Trottin, Xavi Regnier, Thomas Luminic">
    <meta property="og:title" content="Wild Cruise">
    <meta property="og:description" content="WildeCruise, choisissez une de nos croisières fluviale avec la meilleur équipe du monde">
    <meta property="og:image" content="./img/logo.png">
    <meta property="og:url" content="#">
    <meta name="twitter:card" content="summary_large_image">
    <title>Wild Cruise</title>
</head>
<body>
<?php
    require_once('./components/header.php');
?>
    <section id="cruise" class="margin-bottom">
    <h1>Nos Croisières</h1>
    <div class= "container">
        <!-- ANCHOR  CARD 1 -->
        <div class="card">
            <img src="https://zupimages.net/up/20/11/4hy5.jpg" alt="Croisière Bordeaux de nuit" style="width:100%">
            <div class="container2">
                <div class="container3">
                    <div class="depart"> <h4>Départ tous les jours 18h  -  Durée 2h</h4> </div>
                </div>
                <div class="description">
                    <h3>Cruise & Wine</h3>
                    <p class="CruiseDescription">
                        Découvrir les charmes du Bassin d'Arcachon, le temps d'une journée, d'un pique-nique et d'une baignade à l'île aux oiseaux, comme dans le film "Les petits mouchoirs"
                    </p> 
                    <p class="apartirde">
                        Tarif Adulte
                    </p>
                    <p class="prixAdulte">
                        25€
                    </p>
                    <div class="ctabook">
                        <a href="./payment.html" class="bouton1">Réservez cette croisière</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- ANCHOR  CARD 2 -->
        <div class="card">
            <img src="https://zupimages.net/up/20/11/opkk.jpg" alt="Croisière Bordeaux de nuit" style="width:100%">
            <div class="container2">
                <div class="container3">
                    <div class="depart">
                        <h4>Départ tous les dimanche 11h  -  Durée: 4h</h4>
                    </div>
                </div> 
                <div class="description">
                    <h3>Le long de l'estuaire</h3>
                    <p class="CruiseDescription">Découvrir les charmes du Bassin d'Arcachon, le temps d'une journée, d'un pique-nique et d'une baignade à l'île aux oiseaux, comme dans le film "Les petits mouchoirs"</p>
                    <p class="apartirde">
                        Tarif Adulte
                    </p>
                    <p class="prixAdulte">
                        50€
                    </p>
                    <div class="ctabook">
                        <a href="./payment.html" class="bouton1">Réservez cette croisière</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- ANCHOR  CARD 3 -->
        <div class="card">
            <img src="https://i.goopics.net/E1XVK.png" alt="Croisière Bordeaux de nuit" style="width:100%">
            <div class="container2">
                <div class="container3">
                    <div class="depart">
                        <h4>Départ tout les samedi 9h  -  Durée: 6h</h4>
                    </div>
                </div>
                <div class="description">
                    <h3>Ile aux oiseaux</h3>
                    <p class="CruiseDescription">
                        Découvrir les charmes du Bassin d'Arcachon, le temps d'une journée, d'un pique-nique et d'une baignade à l'île aux oiseaux, comme dans le film "Les petits mouchoirs"
                    </p>
                    <p class="apartirde">
                        Tarif Adulte
                    </p>
                    <p class="prixAdulte">
                        75€
                    </p>
                    <div class="ctabook">
                        <a href="./payment.html" class="bouton1">Réservez cette croisière</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- ANCHOR  END CARD DESKTOP -->
    </div>
    <!-- ANCHOR MOBILE CARDS -->
    <div class= "container-mob flex">
        <!-- ANCHOR CARD MOBILE 1 -->
        <div class="card-mob">
            <div class="image-mob">
                <img src="https://zupimages.net/up/20/11/ic2f.png" alt="Croisière Bordeaux de nuit" style="width:100%">
                <div class="description-mob">
                    <h3 class="MobCardTitle">Cruise & Wine</h3>
                </div>
            </div>
            <div class="container2-mob">
                <div class="container3-mob">
                    <div class="CTAensavoirplus">
                        <button id="togg1">
                            En savoir plus
                        </button>
                    </div>
                    <div id="descmobile1">
                        <h4 class="depart-mob">
                            Départ tous les jours 18h</br> Durée 2h
                        </h4> 
                        <p class="CruiseDescription">
                            Découvrir les charmes du Bassin d'Arcachon, le temps d'une journée, d'un pique-nique et d'une baignade à l'île aux oiseaux, comme dans le film "Les petits mouchoirs"
                        </p> 
                        <p class="apartirde">
                            Tarif Adulte
                        </p>
                        <p class="prixAdulte">
                            25€
                        </p>
                        <div class="ctabook-mob">
                            <a href="./payment.html" class="bouton1-mob">Réservez cette croisière</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ANCHOR CARD MOBILE 2 -->
        <div class="card-mob">
            <div class="image-mob">
                <img src="https://zupimages.net/up/20/11/opkk.jpg" alt="le long de l'estuaire" style="width:100%">
                <div class="description-mob">
                    <h3 class="MobCardTitle">
                        L'estuaire
                    </h3>
                </div>
            </div>
            <div class="container2-mob">
                <div class="container3-mob">
                    <div class="CTAensavoirplus">
                        <button id="togg2">
                            En savoir plus
                        </button>
                    </div>
                    <div id="descmobile2">
                        <h4 class="depart-mob">
                            Départ tous les dimanche 11h</br> Durée 4h
                        </h4> 
                        <p class="CruiseDescription">
                            Découvrir les charmes du Bassin d'Arcachon, le temps d'une journée, d'un pique-nique et d'une baignade à l'île aux oiseaux, comme dans le film "Les petits mouchoirs"
                        </p> 
                        <p class="apartirde">
                            Tarif Adulte
                        </p>
                        <p class="prixAdulte">
                            50€
                        </p>
                        <div class="ctabook-mob">
                            <a href="./payment.html" class="bouton1-mob">
                                Réservez cette croisière
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ANCHOR CARD MOBILE 3 -->
        <div class="card-mob">
            <div class="image-mob">
                <img src="https://zupimages.net/up/20/11/r1u5.png" alt="Ile aux oiseaux" style="width:100%">
                <div class="description-mob">
                    <h3 class="MobCardTitle">
                        L'Ile aux oiseaux
                    </h3>
                </div>
            </div>
            <div class="container2-mob">
                <div class="container3-mob">
                    <div class="CTAensavoirplus">
                        <button id="togg3">
                            En savoir plus
                        </button>
                    </div>
                    <div id="descmobile3">
                        <h4 class="depart-mob">
                            Départ tous les dimanche 9G </br> Durée 6h
                        </h4> 
                    <p class="CruiseDescription">
                        Découvrir les charmes du Bassin d'Arcachon, le temps d'une journée, d'un pique-nique et d'une baignade à l'île aux oiseaux, comme dans le film "Les petits mouchoirs"
                    </p> 
                    <p class="apartirde">Tarif Adulte </p>
                    <p class="prixAdulte">75€</p>
                    <div class="ctabook-mob">
                        <a href="./payment.html" class="bouton1-mob">Réservez cette croisière</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    <hr>
    <section id="team">
        <!-- ANCHOR TEAM -->
    <h2 class="SectionTitle"> Notre équipe</h2>
    <div class="team">
        <ul class="AllMembers" >
            <li class="LiMember">
                <img class="Member" src="./img/barbenoire.jpg" alt="Barbe Noir">
                <p class="name">Barbe Noir</p>
                <p class="job">Matelot Guide</p>
            </li>
            <li class="LiMember">
                <img class="Member" src="./img/davyjones.jpg" alt="Davy Jones">
                <p class="name">Davy Jones</p>
                <p class="job">Matelot Guide</p>
            </li>
            <li class="LiMember">
                <img class="Member" src="./img/jackcparou.jpg" alt="Jack Cparou">
                <p class="name">Jack Cparou</p>
                <p class="job">Capitaine</p>
            </li>
            <li class="LiMember">
                <img class="Member" src="./img/blackpearl.jpg" alt="Black Pearl">
                <p class="name">Black Pearl</p>
                <p class="job">Péniche B45</p>
            </li>
        </ul>
    </div>
    </section>
    <hr>
    <!-- ANCHOR CONTACT US -->
    <section id="contactUs" class="formContainer">
        <h2>nous contacter</h2>
        <form>
            <div class="formitem names">
                <div>
                    <label for="fname">Prénom:</label>
                    <input type="text" class="fname" name="fname" placeholder="Entrez votre prénom"></input>
                </div>
                <div>
                    <label for="lname">Nom:</label>
                    <input type="text" class="lname" name="lname" placeholder="Entrez votre nom de famille"></input>
                </div>
            </div>
            <div class="formitem">
                <label for="email">Email:</label>
                <input type="email" class="email" name="email" placeholder="exemple@gmail.com"></input>
                </div>
            <div class="formitem">
                <label for="message">Votre message</label>
                <textarea name="message" id="" ></textarea>
            </div>
            <div class="buttoncontainer">
                <label for="button"></label>
                <input type="submit" class="button" value="Envoyer"></input>
            </div>
        </form>
    </section>
    <hr>
    <!-- ANCHOR FIND US -->
    <section id="findUs" class="section-margin">
        <h2 class="contact-title">nous trouver</h2>
        <div class="flex contact-section">
            <div class="flex contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d90529.33616648683!2d-0.563039!3d44.841083!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x20893706f0a156a!2sCroisi%C3%A8res%20Burdigala!5e0!3m2!1sen!2sfr!4v1583941782900!5m2!1sen!2sfr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <div class="contact-text">
                <p class="para-color"><span class="title-color contact-step">Adresse :</span> Ponton "Croisières, 33100 Bordeaux</p>
                <p class="para-color"><span class="title-color contact-step">tel :</span> 06.20.20.20.20</p>
                <p class="para-color"><span class="title-color contact-step">E-mail:</span> uneAdresseTropGénial@lul.fr</p>
                <p class="title-color contact-step">facebook :
                    <a href="facebook.fr" title="Page facebook">
                        <i class="fab fa-facebook-square"></i>
                    </a>
                </p>
                <p class="title-color contact-step">twitter :
                    <a href="twitter.fr" title="Page twitter">
                        <i class="fab fa-twitter-square"></i>
                    </a>
                </p>
            </div>
        </div>
    </section>
    <!-- ANCHOR FOOTER -->
    <?php
        require_once('./components/footer.php');
    ?>
<script src="./js/script.js"></script>
</body>
</html>