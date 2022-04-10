<?php
/**
 * Partial template for content in submit-story.php
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

	</header><!-- .entry-header -->


	<div class="entry-content">

		<?php
		the_content();        
		//understrap_link_pages();
		?>
        <div id="acf-form">
            <?php
                acf_form(array(
            'post_id'       => 'new_post',
            'post_title'    => true,
            'post_content'  => true,
            'submit_value'  => __('Add your story')
        ));
            ?>
        </div>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php understrap_edit_post_link(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
