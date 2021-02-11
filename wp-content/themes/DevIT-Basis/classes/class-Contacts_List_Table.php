<?php

class Example_List_Table extends WP_List_Table {

	function __construct(){
		parent::__construct(array(
			'singular' => 'log',
			'plural'   => 'logs',
			'ajax'     => false,
		));

		$this->bulk_action_handler();
		add_screen_option( 'per_page', array(
			'label'   => 'Display on page',
			'default' => 20,
			'option'  => 'logs_per_page',
		) );

		$this->prepare_items();

		add_action( 'wp_print_scripts', [ __CLASS__, '_list_table_css' ] );
	}

	function prepare_items(){
		global $wpdb;

		$per_page = get_user_meta( get_current_user_id(), get_current_screen()->get_option( 'per_page', 'option' ), true ) ?: 20;

		$this->set_pagination_args( array(
			'total_items' => 20,
			'per_page'    => $per_page,
		) );
		$cur_page = (int) $this->get_pagenum();
		$this->items = get_posts( array(
			'numberposts' => 5,
			'category'    => 0,
			'orderby'     => 'date',
			'order'       => 'DESC',
			'include'     => array(),
			'exclude'     => array(),
			'meta_key'    => '',
			'meta_value'  =>'',
			'post_type'   => 'post',
			'suppress_filters' => true,
		) );
		

	}

	function get_columns(){
		return array(
			'cb'            => '<input type="checkbox" />',
			'id'            => 'ID',
			
			'date'			=> 'Creation Date',
		);
	}

	/*function column_founded_items( $item ){
	global $wpdb;
	$item_id = $item->id;
		
	}*/

	/*function get_bulk_actions() {
		$actions = array(
			'delete'	=> __( 'Delete Permanently', '' ),
		);
		return $actions;
	}*/

	


	static function _list_table_css(){
		?>
		<style>
			
		</style>
		<?php
	}

	// вывод каждой €чейки таблицы...
	function column_default( $item, $colname ){

		if( $colname === 'customer_name' ){
			$actions = array();
			$actions['delete'] = sprintf( '<a href="%s">%s</a>', '#retertert', __('delete','') );

			return esc_html( $item->name ) . $this->row_actions( $actions );
		} elseif( $colname === 'founded_items' ){
			// ссылки действи€ над элементом
			$actions = array();
			$actions['items'] = sprintf( '<a href="%s">%s</a>', '#', __('items','') );

			return esc_html( $item->name ) . $this->row_actions( $actions );
		}
		else {
			return isset($item->$colname) ? $item->$colname : print_r($item, 1);
		}

	}

	function column_cb( $item ){
		echo '<input type="checkbox" name="licids[]" id="cb-select-'. $item->id .'" value="'. $item->id .'" />';
	}


	protected function get_default_primary_column_name() {
		return 'id';
	}

} ?>