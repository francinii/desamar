document.oncontextmenu = function () {
    return true;
}
document.onmousedown = function () {
    return true;
}
document.onselectstart = function () {
    return false;
}



$(document).ready(function () {
    $('a[href^="#"]').click(function () {
        var destino = $(this.hash);
        if (destino.length == 0) {
            destino = $('a[name="' + this.hash.substr(1) + '"]');
        }
        if (destino.length == 0) {
            destino = $('html');
        }
        $('html, body').animate({scrollTop: destino.offset().top}, 1000);
        return false;
    });
    
    $(window).scroll(function () {
        var windowHeight = $(window).scrollTop();
        var contenido2 = $("#acerca").offset();
        contenido2 = contenido2.top;

        if (windowHeight >= contenido2) {
            $('#comprimiso').fadeIn(1000); 
            
            setTimeout(
                function ()
                {
                    $('#confianza').fadeIn(1000);
                }, 
            1000);
            
            setTimeout(
                function ()
                {
                    $('#liderazgo').fadeIn(1000);
                }, 
            2000);
            
            setTimeout(
                function ()
                {
                    $('#calidad').fadeIn(1000);
                }, 
            3000);
            
            
            
            
        } 
    });
    
    
    
    
    
});

