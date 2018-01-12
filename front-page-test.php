<?php get_header(); ?>
<!--   TEMPLATE FRONT-PAGE.PHP -->
		<main class="container">
			<div class="row">
				<div id="contenuti" class="col-md-12">

<!--start loop di Wordpress -->
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				
				

				<div <?php post_class('articolo'); ?>>		
		<?php 
        $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
         <a href="<?php the_permalink(); ?>">
        <h2 <?php echo 'class="bigtitle" style="background:  linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('. $url.');"'; ?>>
        
        <?php the_title(); ?></h2>
        </a>
				<?php the_excerpt() ?>
    	         <a href="<?php the_permalink(); ?>"><span class="readmore">Continua a leggere &raquo;</span></a>
                  <hr>
                </div>
				</div>
				<?php endwhile; else: ?>

                <div class="articolo">
                    <h2>Attenzione!</h2>
                    <p>Nessun elemento trovato</p>
                </div>
                <?php endif; ?>
<!--    end loop Wordpress -->



<div class="navigation text-center"><?php pagination_nav(); ?>
	
</div>

				</div>
		</main>

	<?php get_footer(); ?>
