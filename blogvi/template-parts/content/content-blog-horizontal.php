<?php
/**
 * Template part for displaying blog post - horizontal.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package     Blogvi
 * @author      Peregrine Themes
 * @since       1.0.0
 */

/**
 * Do not allow direct script access.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// phpcs:disable WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedHooknameFound -- Parent theme (Bloglo) hooks.

?>

<?php do_action( 'bloglo_before_article' ); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'bloglo-article' ); ?><?php bloglo_schema_markup( 'article' ); ?>>

	<?php
	$blogvi_blog_entry_format = get_post_format();

	if ( 'quote' === $blogvi_blog_entry_format ) {
		get_template_part( 'template-parts/entry/format/media', $blogvi_blog_entry_format );
	} else {

		$blogvi_classes     = array();
		$blogvi_classes[]   = 'bloglo-blog-entry-wrapper';
		$blogvi_thumb_align = bloglo_option( 'blog_image_position' );
		$blogvi_thumb_align = apply_filters( 'bloglo_horizontal_blog_image_position', $blogvi_thumb_align );
		$blogvi_classes[]   = 'bloglo-thumb-' . $blogvi_thumb_align;
		$blogvi_classes     = implode( ' ', $blogvi_classes );
		?>

		<div class="<?php echo esc_attr( $blogvi_classes ); ?>">
			<?php get_template_part( 'template-parts/entry/entry-thumbnail' ); ?>

			<div class="bloglo-entry-content-wrapper">

				<?php
				if ( bloglo_option( 'blog_horizontal_post_categories' ) ) {
					get_template_part( 'template-parts/entry/entry-category' );
				}

				get_template_part( 'template-parts/entry/entry-header' );
				get_template_part( 'template-parts/entry/entry-summary' );

				if ( bloglo_option( 'blog_horizontal_read_more' ) ) {
					get_template_part( 'template-parts/entry/entry-summary-footer' );
				}

				get_template_part( 'template-parts/entry/entry-meta' );
				?>
			</div>
		</div>

	<?php } ?>

</article><!-- #post-<?php the_ID(); ?> -->

<?php do_action( 'bloglo_after_article' ); ?>
