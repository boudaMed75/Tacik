let nav_mobile = document.getElementById("nav-mobile");
nav_mobile.onclick = ()=>{
    let mobile_nav_bar = document.createElement("div");
    mobile_nav_bar.className = "arriere";
    document.body.style.overflow = "hidden";
    document.body.appendChild(mobile_nav_bar);
    mobile_nav_bar.innerHTML = `<div id="close">
              
    </div>
    <ul>
    <li><a href="index.php">Accueil</a></li>
    <li><a href="agence.php">agence</a></li>
    <li>
    <a href="nos-services.php">nos service</a>
    <i id="more" class="fa-solid fa-angle-right"></i>
        <ul id="sous-link" class="sous-link">
            <li><a href="site internet.php">site internet</a></li>
            <li><a href="add.php">Social media / ADS</a></li>
            <li><a href="autre-service.php">Autre Services</a></li>
        </ul>
    </li>
    <li><a href="portfolio.php">portfolio</a></li>
    <li><a href="contact.php">Contact</a></li>
    </ul>`;
    document.getElementById("more").onclick = ()=>{
        console.log("ok");
        document.getElementById("sous-link").classList.toggle("visible");
    }
    document.getElementById("close").onclick = ()=>{
    console.log("bouda");
    document.body.style.overflow = "scroll";
    mobile_nav_bar.remove();
};
};