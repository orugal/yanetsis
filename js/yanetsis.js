"use strict";
$(document).ready(function () {
    //$("#wrapper").toggleClass("toggled");
    $('.horizon').horizon({
        threshold: 0
    });
    $(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });
    yanetsis.tamanoPanel();
    yanetsis.botonesPieHome();
    //animación botones home
    $(".btnMenuPie").hover(function () {
        yanetsis.animateBotones(this, 1);
    });
    $(".btnMenuPie").mouseleave(function () {
        yanetsis.animateBotones(this, 0);
    });
    //acomodo los laterales internos
    yanetsis.lateralesInternos();
    //defino los tamaños de las internas
    yanetsis.tamanoInternos();
    //quito el preloader
    $(".preloader").fadeOut();
});
var yanetsis = {
    tamanoPanel: function () {
        var altoNavegador = $(document).height();
        //asigno el tamaño al panel
        $(".backgroundPrincipal").height(altoNavegador);
    },
    botonesPieHome: function () {
        var cantPaneles = 4;
        var claseBoton = ".btnMenuPie";
        var anchoPanelCentral = $("#page-content-wrapper").width();
        var anchoBotones = (anchoPanelCentral / cantPaneles);
        $(claseBoton).width(anchoBotones);
        yanetsis.distribuyeBotones(anchoBotones);
    },
    distribuyeBotones: function (ancho) {
        var claseBoton = $(".btnMenuPie");
        var contador = 0;
        var contador2 = 1;
        var tamano = 0;
        var medida = 0;
        for (var a = 1; a <= 4; a++) {
            tamano = (ancho * contador);
            medida = (tamano == 0) ? 0 : tamano;
            //console.log(ancho+" X "+contador+" = "+ancho * contador);
            $("#btn" + contador2).css("left", medida);
            //tamano += (ancho * contador);
            contador++;
            contador2++;
        }
    },
    animateBotones: function (boton, pos) {
        var botonid = $(boton).attr("id");
        var dataBg = $(boton).data("bg");
        //$(".backgroundPrincipal").css("background-image",'url("./images/diseno/bg'+dataBg+'.jpg")')
        /*$('.backgroundPrincipal').animate({
                opacity: 0
                }, 'slow', function(){
                    $(".backgroundPrincipal").css("background-image",'url("./images/diseno/bg'+dataBg+'.jpg")')
        });*/
        if (pos == 1) {
            $("#" + botonid + " .txtBoton").slideDown();
            $("#" + botonid + " .btnMasInfo").slideDown();
            $("#" + botonid + " .fotoBotonInt").slideDown();
        }
        else {
            $("#" + botonid + " .txtBoton").slideUp();
            $("#" + botonid + " .btnMasInfo").slideUp();
            $("#" + botonid + " .fotoBotonInt").slideUp();
        }
    },
    lateralesInternos: function () {
        var altoWindow = $(window).height();
        $(".lateralesInternos").height(altoWindow);
    },
    tamanoInternos: function () {
        var altoNavegador = $(window).height();
        var calculoPadding = ($('.lateralesInternos ').width() + 50);
        var posicionPie = ($('.columnaCentralPadding').height() - $(".pieContacto ").height());
        //alert($(document).height() + " - "+ Math.round($(".pieContacto ").height()))
        //$(".columnaCentralPadding").width($(window).width());
        $(".columnaCentralPadding").css("padding-right", calculoPadding + "px");
        $(".columnaCentralPadding").css("padding-bottom", ($(".pieContacto").height() + 20) + "px");
        //$(".pieContacto").css("bottom","-"+($('.columnaCentralPadding').height() - posicionPie)+"px");
        $(".pieContacto ").width($(".columnaCentralPadding").width() + 20);
        //$(".internoSeccionesScroll").height(altoNavegador);
    }
};
