/*
 *  Alto de pantalla
 */
jQuery(document).ready(function () {

    var height = $( window ).height();
    var width = $( window ).width();
    
    /*
     *  Alto de slide
     */ 
    $("section > article").css({height: height + 'px'});
            
});


function animate_menu(id){

    $('#' + id).animatescroll({
        /*
        onScrollStart:function(){$(".submenu").addClass(submenuclass);},
        onScrollEnd:function(){$(document.getElementById(id+'-submenu')).removeClass("submenu-hide");},   
        */
        scrollSpeed:600, easing:'swing'//InOutBack'
    });
}