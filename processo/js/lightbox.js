const imagenes = document.querySelectorAll('.img-galeria')
const imagenesLigth = document.querySelector('.agregar-imagen')
const contenedorLigth = document.querySelector('.imagen-ligth')
const cardapio1 = document.querySelector('.cardapio');

imagenes.forEach(imagen =>{
    imagen.addEventListener('click', ()=>{
        aparecerImagen(imagen.getAttribute('src'))
        
        
    })
})

contenedorLigth.addEventListener('click', (e)=>{
    if(e.target !==imagenesLigth){
        contenedorLigth.classList.toggle('show')
        contenedorLigth.classList.toggle('showImage')
        cardapio1.style.opacity = '1'
    }



})

const aparecerImagen = (imagen)=>{
    imagenesLigth.src = imagen;
    contenedorLigth.classList.toggle('show')
    contenedorLigth.classList.toggle('showImage')
    cardapio1.style.opacity = '0'

}