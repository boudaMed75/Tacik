<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaciK – Agence marketing digital</title>
    <?php include_once "php_file/link.php" ?>
</head>
<body>
<div class="header" id="header">
    <div class="container">
      <a href="#" class="logo">Tacik</a>
      <ul class="main-nav">
        <li><a href="index.php">Acceil</a></li>
        <li><a  href="agence.php">L'Agence</a></li>
        <li>
            <a href="nos-services.php">Nos service</a>
            <!-- Start Megamenu -->
            <div class="mega-menu">
              <div class="image">
                <img src="imgs/megamenu.jpg" alt="" />
              </div>
              <ul class="links">
                <li>
                  <a class="" href="site internet.php"><i class="fa-solid fa-globe"></i>Site Internet</a>
                </li>
                <li>
                  <a href="add.php"><i class="fa-solid fa-headset"></i>Social media / ADS</a>
                </li>
                <li>
                  <a href="autre-service.php"><i class="fa-solid fa-border-all"></i>Autre Services</a>
                </li>
                
              </ul>
              
            </div>
            <!-- End Megamenu -->
          </li>
        <li><a href="portfolio.php">Portfolio</a></li>
        <li><a class="active" href="contact.php">Contact</a></li>
        
      </ul>
      <div id="nav-mobile">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>
    <section>
        <img src="imgs/au.png" alt="">
    </section>
    <div class="container">
        <div class="main-heading">
            <h2>Les autres services </h2>
            <p class="personaliser">En plus de la création de site internet, campagne de publicité et la gestion des réseaux sociaux, vous avez la possibilité de nous confier la réalisation de vos logo, tous type de carte (visite, carte de fidélité,…) et autre flyer, ainsi l’impression suite à ces réalisations.
                N’hésitez à nous demander un devis, en cliquant sur le bouton plus bas dans cette page.</p>
        </div>
        <div class="pricing autre-services">
            <div class="box">
              <div class="title">LOGO</div>
              <img src="imgs/hosting-basic.png" alt="" />
              <div class="price">
                <span class="amount">$99 - 150$</span>
              </div>
              <ul>
                <li class="vide"><p class="info">Le logo est un moyen pour vous reconnaitre en 1 coup d’œil. Nous pouvons vous le créer, en prenant tous les critères que vous souhaitez mettre en avant.</p></li>
                <li>1 proposition et 3 modifications</li>
                <li>*2 propositions et 3 modifications</li>
              </ul>
            </div>
            <div class="box popular">
              <div class="title">FIVER</div>
              <img src="imgs/hosting-advanced.png" alt="" />
              <div class="price">
                <span class="amount">$109 - $129</span>
              </div>
              <ul>
                <li class="vide"><p class="info">Distribuer vos flyers et faites vous connaitre en les déposant à des endroits stratégiques, séminaires ou tout autre endroit qui vous semble approprié, selon l’évènement et mode de transmission qui vous souhaitez mettre en place</p></li>
                <li>Recto</li>
                <li>*Recto/Verso</li>
              </ul>
            </div>
            <div class="box">
              <div class="title">Carte De visite</div>
              <img src="imgs/hosting-professional.png" alt="" />
              <div class="price">
                <span class="amount">$69 - $89</span>
              </div>
              <ul>
                <li class="vide"><p class="info">La carte de visite, l’outil de communication toujours aussi efficace et utile, lors d’échange physique.</p></li>
                <li>Recto</li>
                <li>*Recto/Verso</li>
              </ul>
            </div>
          </div>
        
    </div>
    <div class="link">
            <a href="contact.php" class="lien">En savoir plus</a>
    </div>
    <?php include_once "php_file/footer.php" ?>
</body>
</html>