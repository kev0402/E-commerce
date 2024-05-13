let UserAccountCircle = document.getElementById('UserAccountCircle');
let AccountMenuModal = document.getElementById('AccountMenuModal');
let on = 0;

document.getElementById('UserAccountCircle').addEventListener("click", function () {
    if (on == 0) {

        AccountMenuModal.style.display = 'flex';
        on = 1;

    } else {
        $("#AccountMenuModal").fadeOut("slow");
        on = 1 * 0;
    }
})

const add = document.querySelector('.qty-count--add');
const subtract = document.querySelector('.qty-count--minus');
const quantity = document.querySelector('.product-qty');
    
    let a = 1;

add.addEventListener("click", ()=>{
    if (a < 10) {    
        a++;
        quantity.innerText = a;
    }
});

subtract.addEventListener("click", ()=>{
    if (a > 1) {
        a--;
        quantity.innerText = a;
    }
});

