<?php get_header(); ?>

	<div id="content">

		<div class="wrap">

			<div id="main">

				<div id="breadcrumbs">
					<ul>
						<li><a href="<?php echo site_url(); ?>">Inicio</a></li>
						<li class="sep">/</li>
						<li><?php the_title(); ?> »</li>
					</ul>
					<div class="clearfix"></div>



				</div>

				<div class="post">

					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<?php $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id(), '660x9999' ); ?>
						<div class="post-header" style="background:url(<?php echo $thumbnail[0]; ?>) no-repeat;">

							<!-- Custom field - Título paginas -->
							<h4><?php echo get_post_meta( get_the_ID(), '_gobcl_titulo_1', true); ?></h4>
							<h3><?php echo get_post_meta( get_the_ID(), '_gobcl_titulo_2', true); ?></h3>
						</div>

						<!-- <div class="social">
							<ul>
								<li>
									<div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
								</li>
								<li>
									<a href="https://twitter.com/share" class="twitter-share-button" data-lang="es">Twittear</a>
								</li>
							</ul>
						</div> -->

						<div class="fontsize">
							<ul>
								<li class="small"><a data-size="10">a</a></li>
									<li class="medium current"><a data-size="15">a</a></li>
									<li class="large"><a data-size="20">a</a></li>
							
							</ul>
						</div>

						<div class="clearfix"></div>

						<div class="texto">

							<h3 class="title"><?php the_title(); ?></h3>
							<div class="contenido">
								<?php the_content(); ?>
							</div>
						</div>
					<?php endwhile; ?>
					<?php else: ?>
					<?php endif; ?>

					<div class="clearfix"></div>
				</div>

			</div>

			<!-- Sidebar -->

			<?php get_sidebar(); ?>

			<div class="clearfix"></div>

		</div>

	</div>


	<div class="clearfix"></div>

<?php get_footer(); ?>
