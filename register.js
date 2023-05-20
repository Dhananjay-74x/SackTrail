var noBags = document.querySelector("#noBags");
var uid1 = document.querySelector("#uid1");
var uid2 = document.querySelector("#uid2");
var uid3 = document.querySelector("#uid3");
var containerNo = document.querySelector("#hideno");

noBags.addEventListener("focusout", (e)=> {
    const numberBags = noBags.value;
    if (numberBags == 1){
        uid1.style.display = "flex";
    }
    if (numberBags == 2){
        uid1.style.display = "flex";
        uid2.style.display = "flex";
        uid2.required = true;
    }
    if (numberBags == 3){
        uid1.style.display = "flex";
        uid2.style.display = "flex";
        uid3.style.display = "flex";
        uid2.required = true;
        uid3.required = true;
    }
    containerNo.style.display = "none";
})