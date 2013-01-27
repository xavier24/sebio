/*jshint nonstandard: true, browser: true, boss: true */
/*global jQuery */

( function ( $ ) {
	"use strict";
        var iSidebar,
            sidebarCache;
	// --- global vars
	
	// --- methods
	var afficher_sidebar = function(e){
            if($('#marque').is(":visible")){
                $('#marque').hide("normal");
                $('.sidebar').css("width","85px");
                $('#panier').css("margin-bottom","0");
                $('#panier a').css("height","32px");
                $('#panier h2').css("display","none");
                console.log('fermer');
            }
            else{
                $('#marque').show("slow");
                $('.sidebar').css("width","140px");
                $('#panier').css("margin-bottom","20px");
                $('#panier a').css("height","60px");
                $('#panier h2').css("display","block");
                console.log('ouvrir');
            }
        }
	
	$( function () {

		// --- onload routines
	sidebarCache = $('.sidebar_cache');
        iSidebar = $('.i_sidebar_cache');
        
        
        
        iSidebar.on("click",afficher_sidebar);
	} );

}( jQuery ) );

