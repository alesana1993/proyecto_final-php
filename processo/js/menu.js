const cardapio = document.querySelector('.cardapio');
const menu = document.querySelector('.menu-navegacion');

//console.log(menu)
//console.log(cardapio)


cardapio.addEventListener('click',()=>{
    menu.classList.toggle("spread")
})


window.addEventListener('click', e=>{
    if(menu.classList.contains('spread') && e.target != menu  && e.target != cardapio){

        menu.classList.toggle("spread")

    }
})