let etape = document.getElementById("etape"),
etape_box = etape.querySelectorAll(".box-etape");
console.log(etape_box);
console.log(etape_box.length);

let currentIndex = 0;
function ChangeContenu(){
    etape_box.forEach((e)=>{
        e.classList.remove("active");
    });
    let a = "b";
    etape_box[currentIndex].classList.add("active");
    console.log(currentIndex);
    currentIndex = (currentIndex + 1) % etape_box.length;
    
}

setInterval(ChangeContenu, 4000);
