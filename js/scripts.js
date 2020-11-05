var $ = jQuery;

$( document ).ready(function() {

    

    var path = window.location.pathname.split('/')[1];

   /*  console.log(path); */

    if (path == '') {
       $('.bxslider').bxSlider();
       
    }

    hoverMenu();

    /* funcion para obtener los valores del input del DOM y extraer el termino del page.php */
  $('input').each(function (index, element) {

      // element == this
      array = element.value.split('/');
      
        $.each(array,function (index, element) {
            
            if ( element.search('.php') > 0) {
                console.log(element);
            }

        });
      
  });

    
    if (path == 'galeria' || 'portafolio'){
        galeria_ids() ;
    }
        
        /* Para la seccion de la galeria */
     function galeria_ids() {
            
            var galeria_ids = $('img[data-id]');
            var array_ids = [];
            
            /* console.log(galeria_ids); */
            
            $.each(galeria_ids,function (index, value) {
                
                array_ids.push(value.getAttribute("data-id"));

            } )
            
            /* console.log(array_ids); */
            
            var text_area = document.getElementById('area_ids')
            text_area.value = array_ids;
            
            //Para que un formulario envie data de forma automatica al cargar la pagina
            window.onload=function(){
                
                if (document.getElementById('galeria_id')) {
                    return;
                    
                } else {
                    // Una vez cargada la página, el formulario se enviara automáticamente.
                    document.forms["miformulario"].submit(); 
                }
                  
          };
    }
      

    function hoverMenu() {
        $('.nav-link').hover(function () {
                
           $(this).addClass('hvr-radial-out'); 
    },function () {
        $(this).removeClass('hvr-radial-out'); 
    })};
   
})
