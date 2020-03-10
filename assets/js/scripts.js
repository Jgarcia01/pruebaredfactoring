$(document).ready(function(){
    
    $('#boton-sub').on("click", function() {
        let m = $("#sub-menu").css("display");
        if(m == 'none'){
            $("#sub-menu").css("display", "flex");
        }else if(m == 'flex'){
            $("#sub-menu").css("display", "none");
        }else{
            $("#sub-menu").css("display", "flex");
        }
    })
    
    $('#boton-menu').on("click", function() {
        let m = $("#menu").css("display");
        if(m == 'none'){
            $("#menu").css("display", "flex");           
            $("#menu").css("animation", "menu .5s");
        }else{
            $("#menu").css("display", "none");
        }
    })

    let contador = 0;

    carousel(contador);

    function carousel() {
        var imagenes = document.getElementsByClassName('imagen');
        for (var i = 0; i < imagenes.length; i++) {
        imagenes[i].style.display = 'none';
        }
        contador++;
        if (contador > imagenes.length) {
        contador = 1;
        }
        imagenes[contador - 1].style.display = 'block';
        setTimeout(carousel, 2000);
    }
})