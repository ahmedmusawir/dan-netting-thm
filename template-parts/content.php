<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Moose_Framework
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('blog-post'); ?>>


	<section class="container-fluid">
		
		<div class="featured-img-container col-sm-4 col-md-4 col-lg-4">

			<?php if ( has_post_thumbnail() ) : ?> 
				
				<div class="featured-img">
					<a href="<?php the_permalink(); ?>" title=""><?php the_post_thumbnail( 'blog-size', array('class' => 'img-responsive'));  ?></a>

				</div>
			<?php else : ?>	

				<div class="featured-img">
				
					<a href="<?php the_permalink(); ?>" title=""><img class="img-responsive" src="/wp-content/uploads/2016/07/LifeAtLean1-place-holder-img.jpg" alt=""></a>

				</div>				

			<?php endif; ?>		
			
		</div>

		<div class="featured-txt-container col-sm-8 col-md-8 col-lg-8">

			<header class="entry-header">
				<?php
					if ( is_single() ) {
						the_title( '<h1 class="entry-title">', '</h1>' );
					} else {
						the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
					}

				if ( 'post' === get_post_type() ) : ?>
				<div class="entry-meta">
					<?php moose_frame_posted_on(); ?>
				</div><!-- .entry-meta -->
				<?php
				endif; ?>
			</header><!-- .entry-header -->

			<div class="entry-content">
			

				
				<article class="only-text">
				<?php
					the_excerpt( sprintf(
						/* translators: %s: Name of current post. */
						wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'moose-frame' ), array( 'span' => array( 'class' => array() ) ) ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					) );

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'moose-frame' ),
						'after'  => '</div>',
					) );
				?>
				</article>
			</div><!-- .entry-content -->

			<footer class="entry-footer">
				<?php //moose_frame_entry_footer(); ?>
			</footer><!-- .entry-footer -->		
			
		</div>


	</section>





</article><!-- #post-## -->
