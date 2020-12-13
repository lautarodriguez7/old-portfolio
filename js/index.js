function prueba(e) {
    var inputs = e.value;
    if(inputs.length >= 1) {
        e.nextElementSibling.classList.add('fijar');
    } else {
        e.nextElementSibling.classList.remove('fijar');
    }
}  

function modal() {
    const modall = document.getElementById("myModal");
    const modal2 = document.getElementById("modal-contenido");
    modall.style.display = "flex";
    modal2.style.display = "flex";
}

cerrar = () => {
    const modall = document.getElementById("myModal");
    
    modall.style.display = "none";
}

// var modal = document.getElementById("myModal");
// const modal = $('#myModal');
// var btn = document.getElementById("myBtn");
// const btn = $('#myBtn');
// var span = document.getElementsByClassName("close")[0];


// btn.onclick = function() {
//   modal.style.display = "block";
// }

// span.onclick = function() {
//   modal.style.display = "none";
// }

// window.onclick = function(event) {
//   if (event.target == modal) {
//     modal.style.display = "none";
//   }
// }

$(document).ready(function(){

    $('.close').click(function (e) { 
        // e.preventDefault();
    });

    $('#myBtn').click(function (e) { 
        alert('andaaa');
        $('#myModal').fadeIn(2000);
        $('#myBtn').css('color','red');

        // e.preventDefault();
    });
})