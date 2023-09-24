<?php
/**
 * Contains the post embed content template part
 *
 * When a post is embedded in an iframe, this file is used to create the content template part
 * output if the active theme does not include an embed-content.php template.
 *
 * @package WordPress
 * @subpackage Theme_Compat
 * @since 4.5.0
 */
?>
	<div <?php post_class( 'wp-embed' ); ?>>
		<?php
		$thumbnail_id = 0;

		if ( has_post_thumbnail() ) {
			$thumbnail_id = get_post_thumbnail_id();
		}

		if ( 'attachment' === get_post_type() && wp_attachment_is_image() ) {
			$thumbnail_id = get_the_ID();
		}

		/**
		 * Filters the thumbnail image ID for use in the embed template.
		 *
		 * @since 4.9.0
		 *
		 * @param int $thumbnail_id Attachment ID.
		 */
		$thumbnail_id = apply_filters( 'embed_thumbnail_id', $thumbnail_id );

		if ( $thumbnail_id ) {
			$aspect_ratio = 1;
			$measurements = array( 1, 1 );
			$image_size   = 'full'; // Fallback.

			$meta = wp_get_attachment_metadata( $thumbnail_id );
			if ( ! empty( $meta['sizes'] ) ) {
				foreach ( $meta['sizes'] as $size => $data ) {
					if ( $data['height'] > 0 && $data['width'] / $data['height'] > $aspect_ratio ) {
						$aspect_ratio = $data['width'] / $data['height'];
						$measurements = array( $data['width'], $data['height'] );
						$image_size   = $size;
					}
				}
			}

			/**
			 * Filters the thumbnail image size for use in the embed template.
			 *
			 * @since 4.4.0
			 * @since 4.5.0 Added `$thumbnail_id` parameter.
			 *
			 * @param string $image_size   Thumbnail image size.
			 * @param int    $thumbnail_id Attachment ID.
			 */
			$image_size = apply_filters( 'embed_thumbnail_image_size', $image_size, $thumbnail_id );

			$shape = $measurements[0] / $measurements[1] >= 1.75 ? 'rectangular' : 'square';

			/**
			 * Filters the thumbnail shape for use in the embed template.
			 *
			 * Rectangular images are shown above the title while square images
			 * are shown next to the content.
			 *
			 * @since 4.4.0
			 * @since 4.5.0 Added `$thumbnail_id` parameter.
			 *
			 * @param string $shape        Thumbnail image shape. Either 'rectangular' or 'square'.
			 * @param int    $thumbnail_id Attachment ID.
			 */
			$shape = apply_filters( 'embed_thumbnail_image_shape', $shape, $thumbnail_id );
		}

		if ( $thumbnail_id && 'rectangular' === $shape ) :
			?>
			<div class="wp-embed-featured-image rectangular">
				<a href="<?php the_permalink(); ?>" target="_top">
					<?php echo wp_get_attachment_image( $thumbnail_id, $image_size ); ?>
				</a>
			</div>
		<?php endif; ?>

		<p class="wp-embed-heading">
		    <pajto class="lexomeshume">Read also:</pajto>
			<a href="<?php the_permalink(); ?>" target="_top">
				<?php the_title(); ?>
			</a>
		</p>

		<?php if ( $thumbnail_id && 'square' === $shape ) : ?>
			<div class="wp-embed-featured-image square">
				<a href="<?php the_permalink(); ?>" target="_top">
					<?php echo wp_get_attachment_image( $thumbnail_id, $image_size ); ?>
				</a>
			</div>
		<?php endif; ?>

	</div>
	
	<style>
    .wp-embed a:hover {
    text-decoration: none;
}


p.wp-embed-heading {
    order: 2;
    margin: 0 0 15px;
    font-weight: normal;
    font-size: 21px !important;
    line-height: 1.2;
    font-family: pertitullin;
}

.wp-embed-heading a {
    color: #272727;
}

.lexomeshume {
    display: block;
    text-transform: uppercase; 
    font-size: 15px; 
    color: #ee3024;
    margin: 6px 0;
    font-weight: 600;
}

.wp-embed-heading a:hover {
    color: #ee3024;
}

.wp-embed-excerpt {
    display:none;
}

.wp-embed-footer {
    display:none;
}

.wp-embed {
    display: flex;
    padding: 0;
    box-shadow: unset;
    overflow: hidden;
    border: 0;
}

.wp-embed-featured-image {
	height: 100px;
    padding-right: 15px;
    margin-bottom: 0;
}

.wp-embed-featured-image img {
    width: 170px;
    height: 100px;
    object-fit: cover;
}

.wp-embed-share-dialog.hidden {
    opacity: 0;
    visibility: hidden;
    height: 90px;
}

.wp-embed-share-dialog-content {
    height: 90px;
    transform-style: preserve-3d;
    overflow: hidden;
}

.wp-embed-share-dialog-text {
    display: none;
}

.wp-embed-featured-image.square {
    max-width: unset;
    margin-right: 0;
}

@media only screen and (max-width: 600px) {

.wp-embed-featured-image {
    height: 70px;
    float: left;
    padding-right: 15px;
    margin-bottom: 0;
}

.wp-embed-featured-image img {
        width: 100px;
    height: 70px;
    object-fit: cover;
}

.lexomeshume {
    display: block;
    text-transform: uppercase;
    font-size: 11px;
    margin: 2px;
}

p.wp-embed-heading {
    order: 2;
    margin: 0;
    font-weight: normal;
    font-size: 16px !important;
    line-height: 1.1;
}

}
    
</style>

<?php
