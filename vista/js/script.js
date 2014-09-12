
    	$(document).on('ready', function(){

    		$.get('inicio.html', function(data){
                $('#contenido_seccion').html(data);

                $('#elemento1').on('mouseover', function(){
                    alert($(this).parent().parent().children()[0].getElement());
                    //$(this).parent().children()[0].get().css('color', 'black');
                });

                $('#elemento1').on('mouseout', function(){
                    $(this).parent().children()[0].css('color', 'blue');
                });
            });

            //INICIO
            $('#enlace_inicio').on("click", function(){
                $.get('inicio.html', function(data){
                    $('#contenido_seccion').html(data);
                });
            });

            //NOSOTROS
            $('#enlace_nosotros').on('click', function(){
                $.get('nosotros.html', function(data){
                    $('#contenido_seccion').html(data);
                });
            });

            //PORTAFOLIO
            $('#enlace_portafolio').on('click', function(){
                $.get('portafolio.html', function(data){
                    $('#contenido_seccion').html(data);
                });
            });

            //CONTACTO
            $('#enlace_contacto').on('click', function(){
                $.get('contacto.html', function(data){
                    $('#contenido_seccion').html(data);
                });
            });

        });