/* Funcion de boton finalizar */
function clickFinalizar(){
            
    var respuesta = confirm("Estas seguro que quieres finalizar?");
    if ( respuesta ){
        document.getElementById("div-listado").style.display = "block";
        document.getElementById("msform").style.display = "none";
        document.querySelector('#progressbar').getElementsByTagName('li')[1].classList = 'active';
        document.querySelector('#progressbar').getElementsByTagName('li')[0].classList.remove('active');
    }            
}

/* Funcion de boton volver */
function clickVolver(){
            
        document.getElementById("div-listado").style.display = "none";
        document.getElementById("msform").style.display = "flex";
        document.querySelector('#progressbar').getElementsByTagName('li')[0].classList = 'active';
        document.querySelector('#progressbar').getElementsByTagName('li')[1].classList.remove('active');
}

/* Funcion del scroll */
$(window).on("load resize ", function() {
    var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
    $('.tbl-header').css({'padding-right':scrollWidth});
  }).resize();