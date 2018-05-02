$(document).ready(function(){
	//$("#wrapper").toggleClass("toggled");
	$('.horizon').horizon({
		threshold:0
		}
	);
	$(function () {
	  $('[data-toggle="tooltip"]').tooltip()
	})
	yanetsis.tamanoPanel();
	yanetsis.botonesPieHome();
	//animación botones home
	$(".btnMenuPie").hover(function(){
		yanetsis.animateBotones(this,1);
	});
	$(".btnMenuPie").mouseleave(function(){
		yanetsis.animateBotones(this,0);
	});

	//acomodo los laterales internos
	yanetsis.lateralesInternos();
	//defino los tamaños de las internas
	yanetsis.tamanoInternos();
	//quito el preloader
	$(".preloader").fadeOut();
});

let yanetsis = {
	tamanoPanel:function()
	{
		let altoNavegador : float = $(document).height();
		//asigno el tamaño al panel
		$(".backgroundPrincipal").height(altoNavegador);
	},
	botonesPieHome:function()
	{
		let cantPaneles:number = 4;
		let claseBoton:string = ".btnMenuPie";
		let anchoPanelCentral:float = $("#page-content-wrapper").width();
		let anchoBotones:float = (anchoPanelCentral / cantPaneles)
		
		$(claseBoton).width(anchoBotones);
		yanetsis.distribuyeBotones(anchoBotones);
	},
	distribuyeBotones:function(ancho:number)
	{
		let claseBoton = $(".btnMenuPie");
		let contador:number = 0;	
		let contador2:number = 1;	
		let tamano:float = 0;	
		let medida:string = 0;	
		for(let a=1;a<=4;a++)
		{
			tamano = (ancho * contador);
			medida = (tamano == 0)?0:tamano;
			//console.log(ancho+" X "+contador+" = "+ancho * contador);
			$("#btn"+contador2).css("left",medida);
			//tamano += (ancho * contador);
			contador++;
			contador2++;
		}
	},
	animateBotones:function(boton:any,pos:any)
	{
		let botonid:string 	= $(boton).attr("id");
		let dataBg:string 	= $(boton).data("bg");
		//$(".backgroundPrincipal").css("background-image",'url("./images/diseno/bg'+dataBg+'.jpg")')
		/*$('.backgroundPrincipal').animate({
				opacity: 0
				}, 'slow', function(){
					$(".backgroundPrincipal").css("background-image",'url("./images/diseno/bg'+dataBg+'.jpg")')
		});*/

		if(pos == 1)
		{
			$("#"+botonid+" .txtBoton").slideDown();
	  		$("#"+botonid+" .btnMasInfo").slideDown();
	  		$("#"+botonid+" .fotoBotonInt").slideDown();
		}
		else
		{
			$("#"+botonid+" .txtBoton").slideUp();
	  		$("#"+botonid+" .btnMasInfo").slideUp();
	  		$("#"+botonid+" .fotoBotonInt").slideUp();
		}
	},
	lateralesInternos:function()
	{
		let altoWindow = $(window).height();
		$(".lateralesInternos").height(altoWindow);
	},
	tamanoInternos:function()
	{
		let altoNavegador : any = $(window).height();
		let calculoPadding : any = ($('.lateralesInternos ').width() + 50);
		let posicionPie : any = ($('.columnaCentralPadding').height() - $(".pieContacto ").height());
		//alert($(document).height() + " - "+ Math.round($(".pieContacto ").height()))
		//$(".columnaCentralPadding").width($(window).width());
		$(".columnaCentralPadding").css("padding-right",calculoPadding+"px");
		$(".columnaCentralPadding").css("padding-bottom",($(".pieContacto").height() + 20)+"px");
		//$(".pieContacto").css("bottom","-"+($('.columnaCentralPadding').height() - posicionPie)+"px");
		$(".pieContacto ").width($(".columnaCentralPadding").width() + 20);
		//$(".internoSeccionesScroll").height(altoNavegador);
	}
}