<?php
/*
Template Name: Web Development
*/
get_header(); ?>


<?php // do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
<div class="row" role="main">
	<div class="fp-intro">

	<h1><?php echo get_the_title();?></h1>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<footer>
				<?php
					wp_link_pages(
						array(
							'before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ),
							'after'  => '</p></nav>',
						)
					);
				?>
				<p><?php the_tags(); ?></p>
			</footer>
			<?php do_action( 'foundationpress_page_before_comments' ); ?>
			<?php // comments_template(); ?>
			<?php do_action( 'foundationpress_page_after_comments' ); ?>
		</div>

	</div>

</section>
<?php endwhile;?>
<?php do_action( 'foundationpress_after_content' ); ?>

<div class="row destination align-middle small-up-1 medium-up-3 large-up-3">

<?php 
$args = array(
     'category_name' =>  'web-development' 
);

$my_query = new WP_Query( $args );
while( $my_query->have_posts() ):
    $my_query->the_post();
$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

echo '

<div class="column webdev">

<div class="spec-wrap">

<h3>'.get_the_title().'</h3>

<a href="'.get_permalink().'">

<div class="feature" style="background: url('. $url.')"></div>

</a>

</div>

</div>

';
endwhile;

wp_reset_postdata();
	?>

	


</div>



<?php get_footer();
