<?php get_header(); ?>

	<div id="content">

		<div class="wrap">

			<div id="main">

				<div class="stream">



<!-- inicio codigo de imagen destacada-->
				<!--<h5 class="titulo-seccion">Recomendaciones</h5>-->
<!--
<img src="http://www.minsal.cl/wp-content/uploads/2018/08/UnaPieza2.png" alt="" usemap="#map1535566783858">
<map id="map1535566783858" name="map1535566783858"><area shape="rect" coords="15,6,310,106" title="Mi Cirugia" alt="Mi Cirugia" href="http://www.minsal.cl/micirugia/" target="_blank"><area shape="rect" coords="332.0000305175781,6,653.0000305175781,102" title="Monitoreo" alt="Monitoreo" href="http://www.minsal.cl/monitoreolistadeespera " target="_blank"></map>
-->
 <div class="image">
		<!--<a title="" href="https://www.minsal.cl/remedios-mas-baratos/">
			<img src="https://www.minsal.cl/wp-content/uploads/2020/01/banner-remedios-mas-baratos-cenabast_660x110.png" alt="Remedios M�s Baratos">
		</a>
		<a title="" href="https://www.minsal.cl/exige-el-amarillo/">
                        <img src="https://www.minsal.cl/wp-content/uploads/2020/01/banner-exige-el-amarillo 660x110_01.jpg" alt="Exige el Amarillo">
                </a>
		<a title="" href="https://www.minsal.cl/nuevo-coronavirus-2019-ncov/">
                        <img src="https://www.minsal.cl/wp-content/uploads/2020/03/banner-plan-de-accion-coronavirus_660x110_03.png" alt="Plan de Accion Corona Virus">
                </a>
		<a title="" href="https://www.gob.cl/coronavirus/"  target="_blank">
                        <img src="/wp-content/uploads/2020/03/banner-gob-covid-19.jpg" alt="Plan de Accion Corona Virus">
                </a>
		<a title="" href="https://www.gob.cl/pasoapaso/"  target="_blank">
                        <img src="/wp-content/uploads/2020/07/banner-paso-a-paso.png" alt="Plan Paso a Paso">
                </a>
		<a title="" href="https://www.gob.cl/coronavirus/pasoapaso/"  target="_blank">
                        <img src="/wp-content/uploads/2020/07/banner-paso-a-paso.png" alt="Plan Paso a Paso">
                </a>-->
		<a title="" href="https://www.minsal.cl/calendario-de-vacunacion-masiva-contra-covid-19/"  target="_blank">
                        <img src="wp-content/uploads/2021/02/banner_calendario-vacunacion_660x110_2.png" alt="Plan Paso a Paso">
                </a>
		<a title="" href="https://www.minsal.cl/nuevo-coronavirus-2019-ncov/casos-confirmados-en-chile-covid-19/"  target="_parent">
			<img src="/wp-content/uploads/2020/06/banner-casos-confirmados-coronavirus_660x110.png" alt="Casos confirmados Corona Virus">
                </a>
		
             </div>

<!--
<img src="/wp-content/uploads/2019/05/banner-observatorio-ciudadano_660x140_v2.png" alt="" usemap="#map1545253521318">
<map id="map1545253521318" name="map1545253521318">
<area shape="rect" coords="149,3,217,68" title="" alt="" href="https://www.minsal.cl/gestionhospitalaria" target="_blank">
<area shape="rect" coords="409,8,452,67" title="" alt="" href="https://plandeinversionesensalud.minsal.cl/" target="_blank">
<area shape="rect" coords="588,40,651,108" title="" alt="" href="https://www.minsal.cl/monitoreolistadeespera/" target="_blank">
<area shape="rect" coords="593,117,651,178" title="" alt="" href="https://www.minsal.cl/inmunizaciones/" target="_blank">
<area shape="rect" coords="208,113,271,176" title="" alt="" href="https://www.minsal.cl/cenabast/" target="_blank">
<area shape="rect" coords="281,79,329,140" title="" alt="" href="https://www.minsal.cl/sresponde/" target="_blank">
<area shape="rect" coords="345,113,392,180" title="" alt="" href="https://www.minsal.cl/isp/" target="_blank">
<area shape="rect" coords="464,40,522,108" title="" alt="" href="https://www.minsal.cl/fonasa2/" target="_blank">
<area shape="rect" coords="89,118,150,177" title="" alt="" href="https://www.minsal.cl/atencionprimaria/" target="_blank">
</map>
<br>
-->
<!-- fin codigo de imagen destacada -->


<?php
/*
$api_request = 'http://api.sqlserver/avance_camp_influenza';
$api_response = wp_remote_get( $api_request );
$api_data = wp_remote_retrieve_body( $api_response );

#var_dump((array)json_decode($api_data));
$api_data = (array)json_decode($api_data);
$datos_finales = [];
foreach ($api_data as $key => $ad) {
        $datos_finales['POB_VACUNADA']=$ad->POB_VACUNADA;
        $datos_finales['POB_OBJETIVO']=$ad->POB_OBJETIVO;
	//$datos_finales['AVANCE']=round($ad->AVANCE,3)*100;
	$datos_finales['AVANCE']=str_replace(".", ",", round($ad->AVANCE,3));

	$objetivo = number_format($datos_finales['POB_OBJETIVO']);
	$objetivo = str_replace(",", ".",$objetivo);

	$vacunados = number_format($datos_finales['POB_VACUNADA']);
        $vacunados = str_replace(",", ".",$vacunados);
}
*/
?>

<!-- 

<style>#box_widget_camp_vacunas{background-color:#fff;position:relative;padding-top:10px;width:100%;height:130px}div.titulo_widget_camp_vacunas{padding-top:5px;padding-bottom:5px;background-color:#d51d1a;font-family:"Lucida Grande","Lucida Sans Unicode","Lucida Sans","DejaVu Sans",Verdana,sans-serif;font-weight:700;text-align:center;color:#fff}div.inmunizados_widget_camp_vacunas,div.objetivo_widget_camp_vacunas,div.porcentaje_widget_camp_vacunas{width:33.3%;position:absolute;background-color:#fff;color:#e23929;line-height:150%;font-family:"Lucida Grande","Lucida Sans Unicode","Lucida Sans","DejaVu Sans",Verdana,sans-serif;font-weight:700;text-align:center}div.inmunizados_widget_camp_vacunas{left:33.3%;border-left:1px solid #000}div.porcentaje_widget_camp_vacunas{left:66.6%;border-left:1px solid #000}div.cajita_widget_camp_vacunas{font-size:10px;padding:5px;font-family:"Lucida Grande","Lucida Sans Unicode","Lucida Sans","DejaVu Sans",Verdana,sans-serif;font-weight:700;text-align:center;background-color:#000;color:#fff}@media screen and (min-width:601px){div.titulo_widget_camp_vacunas{font-size:16px}div.inmunizados_widget_camp_vacunas,div.objetivo_widget_camp_vacunas,div.porcentaje_widget_camp_vacunas{font-size:15px;top:50px}div.cajita_widget_camp_vacunas{width:50%;position:absolute;left:25%;font-size:16px;top:40px}}@media screen and (max-width:600px){div.titulo_widget_camp_vacunas{font-size:10px}div.inmunizados_widget_camp_vacunas,div.objetivo_widget_camp_vacunas,div.porcentaje_widget_camp_vacunas{font-size:9px;top:70px}div.cajita_widget_camp_vacunas{width:70%;position:absolute;left:15%;font-size:11px;top:35px}}</style>
<br>
<div id="box_widget_camp_vacunas" onclick="window.open('http://www.deis.cl/wp-content/2019/gobCL-sitios-1.0/assets/Dashboard_Influenza_2019.html','_blank');" style="cursor:pointer;">

<div class="titulo_widget_camp_vacunas">
    <img src="http://www.minsal.cl/wp-content/uploads/2018/03/monitos-left-1.png" /> 
    AVANCES VACUNACI&Oacute;N CONTRA LA INFLUENZA 2019 
    <img src="http://www.minsal.cl/wp-content/uploads/2018/03/monitos-right-1.png"/>
</div>    

<div class="objetivo_widget_camp_vacunas">
    Poblaci&oacute;n Objetivo
    <div class="cajita_widget_camp_vacunas">
        <?php echo $objetivo; ?>
    </div>
</div>
<div class="inmunizados_widget_camp_vacunas">
    Inmunizados hasta hoy
    <div class="cajita_widget_camp_vacunas">
        <?php echo $vacunados; ?>
    </div>
</div>
<div class="porcentaje_widget_camp_vacunas">
    Porcentaje de Avance
    <div class="cajita_widget_camp_vacunas">
        <?php echo $datos_finales['AVANCE']; echo '%'; ?>
    </div>
</div>

</div>
<br />

    -->

					<br/>
					<!--<h5 class="titulo-seccion">Últimas Noticias</h5>-->
					<h5 style="font-family:verdana">Últimas Noticias</h5>

					<!-- Post destacado -->


					<?php

					/* 	Mostramos último post 'sticky' */

					$cat_noticias = get_category_by_slug('noticias');

					$args = array(
						'posts_per_page' => 1,
						'cat' => $cat_noticias->term_id,
						'post__in'  => get_option( 'sticky_posts' ),
						'ignore_sticky_posts' => 1,
						'no_found_rows' 	=> true,
					);
					$sticky = new WP_Query($args);

					$sticky_post = array();

					if($sticky->have_posts()) : while($sticky->have_posts()): $sticky->the_post(); ?>

						<div class="post tarjeta destacado">
							<div class="pic">
								<a href="<?php the_permalink(); ?>">
									<?php if (has_post_thumbnail()): ?>
										<?php the_post_thumbnail('660x440'); ?>
									<?php else: ?>
										<img src="http://placehold.it/660x250">
									<?php endif ?>
								</a>
							</div>
							<div class="texto">
								<div class="left">
									<h4 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
								</div>
								<div class="right">
									<span class="meta"><?php the_time( 'j \d\e F \d\e Y '); ?></span>
									<?php the_excerpt(); ?>
								</div>
								<div class="clearfix"></div>
							</div>
							<!--Se comenta este bloque para eliminar el plugin @3imit-->
							<!-- <div class="social">
								<ul>
									<li>
										<div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
									</li>
									<li>
										<a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink(); ?>" data-text="<?php the_title(); ?>" data-lang="es">Twittear</a>
									</li>
									<div class="clearfix"></div>
								</ul>
							</div> -->
						</div>

					<?php $sticky_post[] = get_the_id(); endwhile;
					wp_reset_postdata();
					endif; ?>

					
				<!-- mover aqui codigo de imagen destacada cuando baje prioridad-->

<?php
					// Opciones del Tema - Home: Banner Wide
					$banner_wide = gobcl_get_option('_gobcl_banner_wide');

					if ($banner_wide) {
						get_template_part('inc/modulo', 'banner_wide');
					}
				?>


<!-- Últimas Noticias -->

					<?php

					/*	Mostramos últimas noticias, excluyendo post 'sticky'. */

					$args = array(
						'cat'				=> $cat_noticias->term_id,
						'posts_per_page' 	=> '5',
						'no_found_rows' 	=> true,
						'post__not_in'		=> $sticky_post
					);

					$noticias = new WP_Query($args);

					if($noticias->have_posts()) : while($noticias->have_posts()): $noticias->the_post(); ?>

						<div class="post tarjeta">
							<div class="pic">

								<a href="<?php the_permalink(); ?>">

									<?php if (has_post_thumbnail()): ?>
										<?php the_post_thumbnail('320x210'); ?>
									<?php else: ?>
										<img src="http://placehold.it/320x210" alt="">
									<?php endif ?>

								</a>

							</div>
							<div class="texto">
								<span class="meta"><?php the_time( 'j \d\e F \d\e Y '); ?></span>
								<h4 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
							</div>
							<div class="clearfix"></div>
						</div>

					<?php endwhile; ?>
						<a href="<?php echo get_category_link($cat_noticias->term_id); ?>" id="mas-noticias" class="boton">+ Ver más <strong>Noticias</strong></a>
					<?php
					wp_reset_postdata();
					endif; ?>



				</div>				


<!--- BANNER OBSERVATORIO --->
<img src="/wp-content/uploads/2019/05/banner-observatorio-ciudadano_660x140_v2.png" alt="" usemap="#map1545253521318">
<map id="map1545253521318" name="map1545253521318">
<area shape="rect" coords="149,3,217,68" title="" alt="" href="https://public.tableau.com/views/PanelporHospital/Portada?:embed=y&:display_count=yes&:origin=viz_share_link" target="_blank">
<area shape="rect" coords="409,8,452,67" title="" alt="" href="https://plandeinversionesensalud.minsal.cl/" target="_blank">
<area shape="rect" coords="593,117,651,178" title="" alt="" href="https://public.tableau.com/views/PanelInmunizaciones/Portada?:embed=y&:display_count=yes&:origin=viz_share_link" target="_blank">
<area shape="rect" coords="208,113,271,176" title="" alt="" href="https://public.tableau.com/views/ObservatorioCiudadanoMinsal/Portada?:embed=y&:display_count=yes&:origin=viz_share_link" target="_blank">
<area shape="rect" coords="281,79,329,140" title="" alt="" href="https://public.tableau.com/views/PanelSaludResponde/Portada?:embed=y&:display_count=yes&:origin=viz_share_link" target="_blank">
<area shape="rect" coords="345,113,392,180" title="" alt="" href="https://public.tableau.com/views/PanelMINSAL/Portada?:embed=y&:display_count=yes&:origin=viz_share_link" target="_blank">
<area shape="rect" coords="464,40,522,108" title="" alt="" href="https://public.tableau.com/views/PanelFONASA/Story2?:embed=y&:display_count=yes&:origin=viz_share_link" target="_blank">
<area shape="rect" coords="89,118,150,177" title="" alt="" href="https://public.tableau.com/views/FuncionamientoAtencinPrimariadeSaludv_10/Story1?:embed=y&:display_count=yes&:origin=viz_share_link" target="_blank">
</map>
<br>
<br>

<!--- NOTICIAS REGIONALES --->

					<div class="stream">
					<h5 class="titulo-seccion">Noticias Regionales</h5>





<table width="100% border="0" cellpadding="6" cellspacing="8" class="tablaregional">
<?php
	$the_query = new WP_Query('showposts=6&orderby=post_date&order=desc&cat=14'); 
	$separador=1;
 	while ($the_query->have_posts()) : $the_query->the_post();
		if($separador == 1)
		{ 

			$separador = 2;
			echo ('<tr>');
 			echo ('<td width="18%"  bgcolor=#ffffff  class="tablaregional">');
			the_post_thumbnail(array(110,110), array ('class' => 'alignleft'));
			echo ('</td>');
			?>
			<td  class="tablaregional" width="30%" bgcolor=#ffffff>
				<h7 class="regional"><a title="<?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h7>
			</td> 
			<div class="clearfix"></div>
			<?php
		}
		else
		{
			$separador = 1;	
 			echo ('<td width="18%" bgcolor=#ffffff  class="tablaregional">');
			the_post_thumbnail(array(110,110), array ('class' => 'alignleft'));
			echo ('</td>');
			?>

			<td width="30%" bgcolor=#ffffff  class="tablaregional">
				<h7 class="regional"><a title="<?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h7>
			</td>

<div class="clearfix"></div>
			<?php
			echo ('</tr>');
		}
	endwhile;
?>
</table>
<div class="clearfix"></div>
<?php wp_reset_query(); ?>


<a href="category/noticiasregionales" id="mas-noticias" class="boton">+ Ver más <strong>Noticias Regionales</strong></a>



</div>

			

				<div class="clearfix"></div>

			</div>

			<!-- Sidebar -->

			<?php get_sidebar(); ?>


			<div class="clearfix"></div>

		</div>

	</div>

	<div id="prefooter">
		<div class="wrap">



			<?php
				// Opciones del tema - Home: Cita Destacada
				$cita_destacada = gobcl_get_option('_gobcl_cita_destacada');

				if ($cita_destacada) {
					get_template_part('inc/modulo', 'cita');
				}
			?>


			<?php
				// Opciones del tema - Home: Banners pre-footer
				$banners_pre_footer = gobcl_get_option('_gobcl_banners_pre_footer');

				if ($banners_pre_footer) {
					get_template_part('inc/modulo', 'banners_pre_footer');
				}
			?>

			<?php 
				// Módulo Enlaces productos prefooter
				get_template_part('inc/modulo', 'productos_pre_footer');
			 ?>

		</div>
	</div>



<div class="clearfix"></div>
	<?php get_footer(); ?>
