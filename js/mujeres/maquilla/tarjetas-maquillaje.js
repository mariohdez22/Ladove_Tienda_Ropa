import {datosN, datos1, datos2, datos3, datos4, datos5} from "./datos-maquillaje.js"

const $secciones1 = document.querySelectorAll('.secciones')[0]
const $secciones2 = document.querySelectorAll('.secciones')[1]
const $secciones3 = document.querySelectorAll('.secciones')[2]
const $secciones4 = document.querySelectorAll('.secciones')[3]
let cat1Init = false
let cat2Init = false
let cat3Init = false
let cat4Init = false
let cat5Init = false

let seccionHide = false;

const tarjetas = (matriz, clase) =>
            
    matriz.forEach( data => 
    {
        const $div = document.createElement("div")
        $div.innerHTML = 
        `
            <div class="apartado-img">
                <a class="link-tarjeta" href="${data.link}"></a>
                <img src="${data.img}" width="260" height="330">
            </div>
            <div class="parte">
                <div class="espacio">
                    <h2>${data.enunciado}</h2>     
                </div>
                <div class="espacio">
                    <p>$${data.precio}</p>
                </div>
            </div>
        `
        $div.classList.add(clase) // atributo a modificare en css para cambiar algo de la tarjeta
        
        if(data.id === 1)
            $secciones1.appendChild($div)

        if(data.id === 2)
            $secciones2.appendChild($div)

        if(data.id === 3)
            $secciones3.appendChild($div)

        if(data.id === 4)
            $secciones4.appendChild($div)
    })

const removedorClases = (elemento, clase) =>

    elemento.forEach( data => {

        data.classList.remove(clase)
        data.classList.add("oculto")

    })

//--------------------------------------------------o

tarjetas(datosN , "inicial")

//--------------------------------------------------o

const categoria1 = document.getElementById("brochas") 

categoria1.addEventListener( "click", ()=> {
    cat2Init = false
    cat3Init = false
    cat4Init = false
    cat5Init = false
    

    
    if(!cat1Init){
    tarjetas(datos1 , "cartas")
    const cartaN = document.querySelectorAll(".inicial")
    removedorClases(cartaN, "inicial")
    const carta1 = document.querySelectorAll(".cartes")
    removedorClases(carta1, "cartes")
    const carta2 = document.querySelectorAll(".cartis")
    removedorClases(carta2, "cartis")
    const carta3 = document.querySelectorAll(".cartos")
    removedorClases(carta3, "cartos")
    const carta4 = document.querySelectorAll(".cartus")
    removedorClases(carta4, "cartus")
    if(!seccionHide){
    const seccion3 = document.querySelectorAll('.secciones')[2]
    const seccion4 = document.querySelectorAll('.secciones')[3]
    seccion3.classList.replace("secciones", "oculto")
    seccion4.classList.replace("secciones", "oculto")

    const productos = document.querySelector('.productos')
    const part2 = document.querySelector('.part2')
    productos.classList.replace("productos", "productas")
    part2.classList.replace("part2", "particula")
    seccionHide = true;
        }

        cat1Init = true;
    }

})

//--------------------------------------------------o

const categoria2 = document.getElementById("labial")

categoria2.addEventListener( "click", () => {
    cat1Init = false
    cat3Init = false
    cat4Init = false
    cat5Init = false
    

    
    if(!cat2Init){
    tarjetas(datos2 , "cartes")
    const cartaN = document.querySelectorAll(".inicial")
    removedorClases(cartaN, "inicial")
    const carta1 = document.querySelectorAll(".cartas")
    removedorClases(carta1, "cartas")
    const carta2 = document.querySelectorAll(".cartis")
    removedorClases(carta2, "cartis")
    const carta3 = document.querySelectorAll(".cartos")
    removedorClases(carta3, "cartos")
    const carta4 = document.querySelectorAll(".cartus")
    removedorClases(carta4, "cartus")
    if(!seccionHide){
    const seccion3 = document.querySelectorAll('.secciones')[2]
    const seccion4 = document.querySelectorAll('.secciones')[3]
    seccion3.classList.replace("secciones", "oculto")
    seccion4.classList.replace("secciones", "oculto")

    const productos = document.querySelector('.productos')
    const part2 = document.querySelector('.part2')
    productos.classList.replace("productos", "productas")
    part2.classList.replace("part2", "particula")
    seccionHide = true;
}

cat2Init = true;
}
})

//--------------------------------------------------o

const categoria3 = document.getElementById("sombra")

categoria3.addEventListener( "click", () => {
    cat1Init = false
    cat2Init = false
    cat4Init = false
    cat5Init = false
    

    
    if(!cat3Init){
    tarjetas(datos3 , "cartis")
    const cartaN = document.querySelectorAll(".inicial")
    removedorClases(cartaN, "inicial")
    const carta1 = document.querySelectorAll(".cartas")
    removedorClases(carta1, "cartas")
    const carta2 = document.querySelectorAll(".cartes")
    removedorClases(carta2, "cartes")
    const carta3 = document.querySelectorAll(".cartos")
    removedorClases(carta3, "cartos")
    const carta4 = document.querySelectorAll(".cartus")
    removedorClases(carta4, "cartus")
    if(!seccionHide){
    const seccion3 = document.querySelectorAll('.secciones')[2]
    const seccion4 = document.querySelectorAll('.secciones')[3]
    seccion3.classList.replace("secciones", "oculto")
    seccion4.classList.replace("secciones", "oculto")

    const productos = document.querySelector('.productos')
    const part2 = document.querySelector('.part2')
    productos.classList.replace("productos", "productas")
    part2.classList.replace("part2", "particula")
    seccionHide = true;
}

cat3Init = true;
}
})

//--------------------------------------------------o

const categoria4 = document.getElementById("base")

categoria4.addEventListener( "click", () => {
    cat1Init = false
    cat2Init = false
    cat3Init = false
    cat5Init = false
    

    
    if(!cat4Init){
    tarjetas(datos4 , "cartos")
    const cartaN = document.querySelectorAll(".inicial")
    removedorClases(cartaN, "inicial")
    const carta1 = document.querySelectorAll(".cartas")
    removedorClases(carta1, "cartas")
    const carta2 = document.querySelectorAll(".cartes")
    removedorClases(carta2, "cartes")
    const carta3 = document.querySelectorAll(".cartis")
    removedorClases(carta3, "cartis")
    const carta4 = document.querySelectorAll(".cartus")
    removedorClases(carta4, "cartus")
    if(!seccionHide){
    const seccion3 = document.querySelectorAll('.secciones')[2]
    const seccion4 = document.querySelectorAll('.secciones')[3]
    seccion3.classList.replace("secciones", "oculto")
    seccion4.classList.replace("secciones", "oculto")

    const productos = document.querySelector('.productos')
    const part2 = document.querySelector('.part2')
    productos.classList.replace("productos", "productas")
    part2.classList.replace("part2", "particula")
    seccionHide = true;
}

cat4Init = true;
}
})