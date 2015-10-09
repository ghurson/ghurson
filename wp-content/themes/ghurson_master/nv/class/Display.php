<?php



Namespace TSD;

class Display {

	static function interior_header() {
		get_template_part( "parts/components/interior-header" );
	}

	static function acf_flexible_content( $id = false ) {

		// there are other pages on the site, that aren't using the flex fields. we're going to look for those here
		if ( static::page_should_use_other_template() )
			return false;


		$id     = $id ? $id : get_the_ID();
		$fields = get_field( "content", $id );

		// If columns is greater than 1, assign the column variable to the corresponding foundation class number
		if ( $fields ) {
			print '<div class="row component-container">';
			foreach ( $fields as $field ) {
				if ( isset( $field['columns'] ) && $field['columns'] > 1 ) {
					$columns = 12 / $field['columns'];
					print '<div class="medium-' . $columns . ' columns">';
					$temp = "acf-flexible-content/" . $field['acf_fc_layout'] . '.php';
					include( locate_template( $temp ) );
					print '</div>';
					unset($field);
				} else {
					print '</div>';
					$temp = "acf-flexible-content/" . $field['acf_fc_layout'] . '.php';
					include( locate_template( $temp ) );
					print '<div class="row component-container">';
					unset($field);
				}
                unset($field);
			}
			print '</div>';
		}
//			get_template_part("acf-flexible-content/" . $field['acf_fc_layout']);
	}

	static function page_should_use_other_template() {
		// page 51 is the news and events page
		if ( get_the_ID() == 51 ) {
			get_template_part( "parts/pages/news-events" );

			return true;
		}

		return false;
	}
}


Class Blog {

	public $query;

	public function __construct(){
		$this->query = new \WP_Query([
			'post_type' => 'post'
		]);
	}

	static function display_categories($category = 'category'){
		// this function will display a byline-formatted output
		// of the tags for the given post. using a parameter, we
		// can also display custom taxonomies as well

		// TODO: hook up custom taxonomies for function

		$cats = get_the_category();

		$op = '';

		foreach($cats as $cat):
			$url = site_url("$category/$cat->slug");
			$op .= "<a href='$url'>$cat->name</a> ";
		endforeach;

		print $op;

	}

	static function display_tags($id) {

		if (!$id):
			print 'post id needed';
			return false;
		endif;

		// this function will display a byline-formatted output
		// of tags for a given post.

		$tags = wp_get_post_tags($id);

		$op = '';

		foreach($tags as $tag):
			$url = site_url("tag/$tag->slug");
			$op .= "<a href='$url'>$tag->name</a> ";
		endforeach;

		print $op;



	}

	static function sidebar_categories($category = 'category'){

		// TODO: hook up custom taxonomies for function

		$cats = get_the_category();

		$op = '';

		foreach($cats as $cat):
			$url = site_url("$category/$cat->slug");
			$op .= "<li><a href='$url'>$cat->name</a></li>";
		endforeach;

		print "<ul>$op</ul>";


	}

	static function sidebar_tags(){

		$tags = get_tags();

		$op = '';

		foreach($tags as $tag):
			$url = site_url("tag/$tag->slug");
			$op .= "<li><a href='$url'>$tag->name</a></li>";
		endforeach;

		print "<ul>$op</ul>";


	}

	static function sidebar_archives(){


		print wp_get_archives();

	}

	static function search_form(){

		print get_search_form();

	}


}