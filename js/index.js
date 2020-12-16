prueba = (e) => {
    var inputs = e.value;
    if(inputs.length >= 1) {
        e.nextElementSibling.classList.add('fijar');
    } else {
        e.nextElementSibling.classList.remove('fijar');
    }
}  

seleccion = (e) => {
    $('.enlaces').removeClass('activo');
    e.classList.add('activo');
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

$(document).ready(function () {
    $('.enlaces').click(function() {
        var valor = $(this).attr('data-nombre');
        if(valor == 'todos') {
            $('.filtro').show('1000');
        } else {
            $('.filtro').not('.' + valor).hide('1000');
            $('.filtro').filter('.' + valor).show('1000');
        }
    })
});
