prueba = (e) => {
    var inputs = e.value;
    if(inputs.length >= 1) {
        e.nextElementSibling.classList.add('fijar');
    } else {
        e.nextElementSibling.classList.remove('fijar');
    }
}  

// modal = () => {
//     const modall = document.getElementById("myModal");
//     const modal2 = document.getElementById("modal-contenido");
//     modall.style.display = "flex";
//     modal2.style.display = "flex";
// }

// cerrar = () => {
//     const modall = document.getElementById("myModal");
    
//     modall.style.display = "none";
// }