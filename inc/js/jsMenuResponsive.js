
var contador=1;

function aparecerMenu() {

    if (contador == 1) {

        $('#menuResponsive').animate({
            left: '0'
        });
        contador = 0;
        
        
    } else {
        contador = 1;
        $('#menuResponsive').animate({
            left: '-100%'
        });
 
    }
    
    
}

