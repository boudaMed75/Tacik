let quality_div = document.getElementById("quality");
const imgElement = quality_div.querySelector('img');
const h2Element = quality_div.querySelector('h2');
const pElement = quality_div.querySelector('p');
const bulletts = document.querySelector(".bullets");
const next = document.querySelector(".fa-angle-right"),
previos = document.querySelector(".fa-angle-left");
console.log(next);
console.log(previos);

fetch('js/quality.json')
  .then(response => response.json())
  .then(data => {
    let contenu = "";
    data.forEach(element => {
        contenu+= "<li></li>";
    });
    bulletts.innerHTML = contenu;
    let currentIndex = 1;
    function ChangeContenu(){
        // imgElement.style.opacity = 0;
        // h2Element.style.opacity = 0;
        // pElement.style.opacity = 0;
        // setTimeout(() => {
            imgElement.src = data[currentIndex]["src"];
            h2Element.textContent = data[currentIndex]["Titre"];
            pElement.textContent = data[currentIndex]["des"];
    
            // imgElement.style.opacity = 1;
            // h2Element.style.opacity = 1;
            // pElement.style.opacity = 1;
    
            currentIndex = (currentIndex + 1) % data.length;
        // }, 100);
    }
    function handleBullet(){
        const bullets_li = bulletts.querySelectorAll("li");
        bullets_li.forEach((ele)=>{
            ele.classList.remove("active");
        });
        bullets_li[currentIndex].classList.add("active");
    }
    handleBullet();
    ChangeContenu();
    setInterval(ChangeContenu, 4000);
    setInterval(handleBullet, 4000);
    next.onclick = ()=>{
        if(currentIndex===data.length-1){
            currentIndex = 0;
        }
        else{
            currentIndex++;
        }
        imgElement.src = data[currentIndex]["src"];
        h2Element.textContent = data[currentIndex]["Titre"];
        pElement.textContent = data[currentIndex]["des"];
        handleBullet();
        
    };
    previos.onclick = ()=>{
        if(currentIndex===0){
            currentIndex = data.length;

        }
        else{
            currentIndex--;
        }
        imgElement.src = data[currentIndex]["src"];
        h2Element.textContent = data[currentIndex]["Titre"];
        pElement.textContent = data[currentIndex]["des"];
        handleBullet();
    };
  });

