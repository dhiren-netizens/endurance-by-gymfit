<?php
/**
 * The class of the blog widget.
 *
 * @package Endurance_By_GymFit
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Blog Widget Class.
 */
class Blog_Widget extends WP_Widget {
	/**
	 * Register widget with WordPress.
	 */
	public function __construct() {
		parent::__construct(
			'blog_widget',
			__( 'Blog Widget', 'endurance-by-gymfit' ),
			array( 'description' => __( 'A Blog Widget to display Categories, Tags, Search, and Related Posts', 'endurance-by-gymfit' ) )
		);
	}

	/**
	 * Widget.
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		echo $args['before_widget'];

		// Display Categories.
		if ( ! empty( $instance['categories'] ) ) {
			$categories = $instance['categories'];
			echo '<div class="block mb-4 wow fadeInUp"><div class="titles"> Categories </div>';
			echo '<div class="box categorieBlock">';
			foreach ( $categories as $category_id ) {
				$category = get_category( $category_id );
				echo '<li><a href="' . esc_url( get_category_link( $category->term_id ) ) . '">' . esc_html( $category->name ) . '</a></li>	';
			}
			echo '</div></div>';
		}

		// Display Tags.
		if ( ! empty( $instance['tags'] ) ) {
			$tags = $instance['tags'];
			echo '<div class="block mb-4 wow fadeInUp"><div class="titles"> Tags </div>';
			echo '<div class="box tagsBlock">';
			foreach ( $tags as $tag_id ) {
				$tag = get_term( $tag_id, 'post_tag' );
				echo '<li><a href="' . esc_url( get_tag_link( $tag->term_id ) ) . '">' . esc_html( $tag->name ) . '</a></li>';
			}
			echo '</div></div>';
		}

		// Search Form.

		echo '<div class="block mb-4 wow fadeInUp"><div class="titles">Search</div>
		<div class="box searchBlock"><div class="fill-up-form">
        <div class="form-group mb-0 post-search">
		<form role="search" method="get" class="search-form" action="' . esc_url( home_url( '/' ) ) . '">
                <label>
                    <span class="screen-reader-text">' . _x( 'Search for:', 'label', 'endurance-by-gymfit' ) . '</span>
                    <input type="search" class="search-field" placeholder="Search …" value="' . get_search_query() . '" name="s" />
                </label>
                <input type="submit" class="search-submit" value="' . esc_attr__( 'Search', 'endurance-by-gymfit' ) . '" />
        </form></div></div></div></div>';

		// Related Posts based on selected Categories.
		if ( ! empty( $instance['categories'] ) ) {
			$args          = array(
				'category__in'   => $instance['categories'],
				'posts_per_page' => 3,
				'post__not_in'   => array( get_the_ID() ),
			);
			$related_posts = new WP_Query( $args );

			if ( $related_posts->have_posts() ) {
				echo '<div class="block wow fadeInUp">';
				echo '<div class="titles">Related Posts</div>';
				echo '<div class="box postBlock">';
				while ( $related_posts->have_posts() ) {
					$related_posts->the_post();
					echo '<div class="post"><div class="image-wrapper">';

					// Display the thumbnail if available.
					if ( has_post_thumbnail() ) {
						echo '<div class="related-post-thumbnail">';
						echo '<a href="' . esc_url( get_the_permalink() ) . '">';
						echo wp_kses( get_the_post_thumbnail( get_the_ID(), 'thumbnail' ), endurance_allowed_tags() );
						echo '</a>';
						echo '</div>';
					}
					echo '</div>';

					// Display the post title.
					echo '<div class="text"><span><a href="' . esc_url( get_the_permalink() ) . '">' . esc_html( get_the_title() ) . '</a></span><p> ' . esc_html( get_the_date() ) . '</p></div>';
					echo '</div>';
				}
				echo '</div></div>';
				wp_reset_postdata();
			}
		}

		echo $args['after_widget'];
	}

	/**
	 * Widget form.
	 *
	 * @param array $instance The widget instance.
	 */
	public function form( $instance ) {

		$title               = ! empty( $instance['title'] ) ? $instance['title'] : __( 'Sidebar', 'endurance-by-gymfit' );
		$selected_categories = ! empty( $instance['categories'] ) ? $instance['categories'] : array();
		$selected_tags       = ! empty( $instance['tags'] ) ? $instance['tags'] : array();

		// Get all categories and tags.
		$categories = get_categories( array( 'hide_empty' => false ) );
		$tags       = get_terms(
			array(
				'taxonomy'   => 'post_tag',
				'hide_empty' => false,
			)
		);

		?>
		<div class="block mb-4 wow fadeInUp">
		<p class="titles">
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Title:' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
	</div>
	<div class="block mb-4 wow fadeInUp">
		<p class="titles">Select Categories:</p>
		<?php foreach ( $categories as $category ) : ?>
			<p class="box tagsBlock">
				<input class="checkbox" type="checkbox" <?php echo in_array( $category->term_id, $selected_categories ) ? 'checked="checked"' : ''; ?> id="<?php echo esc_attr( $this->get_field_id( 'categories' ) . '_' . $category->term_id ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'categories[]' ) ); ?>" value="<?php echo esc_attr( $category->term_id ); ?>" />
				<label for="<?php echo esc_attr( $this->get_field_id( 'categories' ) . '_' . $category->term_id ); ?>"><?php echo esc_html( $category->name ); ?></label>
			</p>
		<?php endforeach; ?>
		</div>
		<div class="block mb-4 wow fadeInUp">
		<p class="titles">Select Tags:</p>
		<?php foreach ( $tags as $tag ) : ?>
			<p class="box tagsBlock">
				<input class="checkbox" type="checkbox" <?php echo in_array( $tag->term_id, $selected_tags ) ? 'checked="checked"' : ''; ?> id="<?php echo esc_attr( $this->get_field_id( 'tags' ) . '_' . $tag->term_id ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'tags[]' ) ); ?>" value="<?php echo esc_attr( $tag->term_id ); ?>" />
				<label for="<?php echo esc_attr( $this->get_field_id( 'tags' ) . '_' . $tag->term_id ); ?>"><?php echo esc_html( $tag->name ); ?></label>
			</p>
		<?php endforeach; ?>
		<?php
	}

	/**
	 * Update widget.
	 *
	 * @param array $new_instance New instance.
	 * @param array $old_instance Old instance.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		// Sanitize and save the title.
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';

		// Save selected categories.
		if ( ! empty( $new_instance['categories'] ) ) {
			$instance['categories'] = array_map( 'intval', $new_instance['categories'] );
		} else {
			$instance['categories'] = array();
		}

		// Save selected tags.
		if ( ! empty( $new_instance['tags'] ) ) {
			$instance['tags'] = array_map( 'intval', $new_instance['tags'] );
		} else {
			$instance['tags'] = array();
		}

		return $instance;
	}
}

register_widget( 'Blog_Widget' );
?>
