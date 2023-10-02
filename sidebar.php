<div id="sidebar">
<?php get_search_form(); ?>
    <?php  


if (is_front_page()) {

    	if (gobcl_get_option('_gobcl_lista_redes')) {
    		// Mostramos Lista Redes Sociales (Opciones del Tema - Lista Redes Sociales)
    		get_template_part('inc/modulo', 'lista_redes');
    	}

       // Checkeamos que Sidebar Principal esté activo en Widgets
        if (is_active_sidebar('sidebar_principal')) {
            get_template_part('inc/modulo', 'widgets_sidebar');
        }

    	// Mostramos módulo Ministerios
       //get_template_part('inc/modulo', 'ministerios');

        // Mostramos el último post de la categoría "Foto Destacada"
        get_template_part('inc/modulo', 'foto_destacada');
        

        // Mostramos Banners Sidebar (Opciones del Tema - Banners Sidebar)
        get_template_part('inc/modulo', 'banners_sidebar');
}

else 
{

 if (is_active_sidebar('sidebar_principal')) {
            get_template_part('inc/modulo', 'widgets_sidebar');
        }

if (gobcl_get_option('_gobcl_lista_redes')) {
    		// Mostramos Lista Redes Sociales (Opciones del Tema - Lista Redes Sociales)
    		get_template_part('inc/modulo', 'lista_redes');
    	}



 

}


 ?>



</div>
