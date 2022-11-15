window.addEventListener("scroll", ()=> 
{
    let header = document.querySelector(".menu");
    header.classList.toggle( "abajo", window.scrollY > 0 );
})
