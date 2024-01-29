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
    <div class="contact-landing">
        <div class="main-heading">
            <h2>Vous avez un projet ?</h2>
            <p class="personaliser">Et si on en parlait ?<br>
                Vous souhaitez effectuer un devis? Prendre rendez-vous ?<br>
                N’hésitez pas à nous demander un devis gratuit et nous serons ravi d’échanger avec vous de votre projet. <br>
                
                Vous avez la possibilité de nous contacter directement par téléphone au 06 18 05 59 70 <br>

                
                Notre but :  Vous apporter de la plus-value !</p>
        </div>
    </div>
    <div class="container">
        <h2>Travaillon ensemble !</h2>
        <form action="">
            <div class="fields-group">
                <div class="field">
                    <label for="">Votre prenom</label>
                    <input type="text">
                </div>
                <div class="field">
                    <label for="">Votre Nom de famille</label>
                    <input type="text">
                </div>
            </div>
            <div class="fields-group">
                <div class="field">
                    <label for="">Votre Adresee email</label>
                    <input type="text">
                </div>
                <div class="field">
                    <label for="">Votre Telephone</label>
                    <input type="text">
                </div>
            </div>
            <div class="fields-group">
                <div class="field">
                    <label for="">Comment pouvons-nous vous aider ?</label>
                    <select name="" id="">
                        <option value="">Comment pouvons-nous vous aider ?</option>
                        <option value="">demande de devis gratruit</option>
                        <option value="">demande de presentation</option>
                        <option value="">demande de presentation orgente</option>
                        <option value="">Besion d'un information</option>
                    </select>
                </div>
                <div class="field">
                    <label for="">Vous êtes </label>
                    <select name="" id="">
                        <option value="">Une société</option>
                        <option value="">Un particulier</option>
                    </select>
                </div>
            </div>
            <div class="field">
                <label for="">Votre Message</label>
                <textarea name="" id="" cols="30" rows="10"></textarea>
            </div>
            <input type="submit" value="envoyer">
            
        </form>
    </div>
    <?php include_once "php_file/footer.php" ?>
</body>
</html>