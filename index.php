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
        <li><a class="active"  href="index.php">Acceil</a></li>
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
        <li><a href="contact.php">Contact</a></li>
        
      </ul>
      <div id="nav-mobile">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>
      <!-- End Header -->
      <!-- start landing -->
      <div class="landing">
        <div class="container">
            <span class="animation"></span>
            <div class="text">
                <h1>TaciK – Agence marketing digital </h1>
                <p>Pour vous aider à obtenir, visibilité et croissance, grâce à une présence sur le web.</p>
                <p>Gagner en crédibilité et booster votre chiffre d’affaire</p>
                <a class="lien" href="nos-services.php">Nos Services</a>
            </div>
            <div class="image">
                <img src="imgs/landing img 2.jpg" alt="">
                
            </div>
            <a href="#agence" class="go-down">
                <i class="fas fa-angle-double-down fa-2x"></i>
              </a>
        </div>
      </div>
      <div class="agence">
            <div class="main-heading">
                <h2>Notre Agence</h2>
                <p>
                  Pour quoi Tacik
                </p>
            </div>
            <div id="agence" class="arr">
                <div class="box">
                    <div class="info">
                        <p>L’important pour nous, c’est de créer un climat de confiance et établir avec vous :</p>
                        <h2>TaciK se veut être dans une relation de partenariat avec comme objectif : Votre satisfaction.</h2>
                        <p>Que vous souhaitez présenter/vendre vos produits et services à des clients, partager un univers à vos lecteurs, un évènement à un instant T comme un séminaire ou pour une toute autre occasion, nous vous écoutons en nous engageant à vos côtés, dans le but de vous aider à montrer votre savoir faire, afin que ce partenariat devienne pour vous</p>
                        <h2>UN ACCÉLÉRATEUR DE CROISSANCE ET DE VISIBILITÉ</h2>
                        <p>Et pour nous, la satisfaction de contribuer à votre réussite.</p>
                        <p>Comment pouvons-nous vous aidez ?</p>
                        <a class="lien" href="nos-services.php">Nos service</a>
                    </div>
                </div>
            </div>
        
      </div>
      <!-- end landing -->
      <!-- start qulite -->
      <div class="qualitte flech">
        <div class="main-heading">
            <h2>Notre Quality</h2>
            <p>
                En résumé, les caractéristiques de TaciK sont
            </p>
        </div>
        <div class="container flech">
            
            <div id="quality" class="text">
                <img src="landing img 1.jpeg" alt="">
                <div class="content">
                  <h2>
                    Compréhension du besoin
                  </h2>
                  <p>
                    Nous assurer d’être dans le vrai quant à votre besoin
                  </p>
                </div>
            
            </div>
            <div class="i-container">
                <i class="fas fa-angle-left change-background fa-2x"></i>
            </div>
            <div class="i-container">
                <i class="fas fa-angle-right change-background fa-2x"></i>
            </div>
            
            
            <ul class="bullets">
                
              </ul>
        </div>
        
      </div>
      <!-- end qualite -->
      <!-- Start Video -->
      <div class="main-heading">
        <h2>Tacik</h2>
        <p>
            Une Agence Marketing Digital
        </p>
    </div>
    <div class="video flech">
        
        <video autoplay muted loop>
          <source src="imgs/awesome-video.mp4" type="video/mp4" />
        </video>
        <div class="text">
          <h2>Une Agence Marketing Digital
            à votre service,
            pour joindre :</h2>
          <p>Le savoir-être et le savoir-faire</p>
          <button>See More</button>
        </div>
      </div>
      <!-- End Video -->
    <?php include_once "php_file/footer.php" ?>
      
      <script src="js/main.js"></script>
</body>
</html>