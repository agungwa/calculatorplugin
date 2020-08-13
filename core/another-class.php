<?php 
/**
 * Adds sub widget widget.
 */


class Another_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
    function __construct()
    {
        parent::__construct(
            'another_widget',
            esc_html__('Another','sub_domain'),
            array('description' => esc_html__('Widget to display Another','sub_domain'),)
        );
    }
	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		echo $args['before_widget'];
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
        }
        
        //widget content output
       
            echo 
            '
            <body>
            <div class="calculator">
                <p>Simple JavaScript Calculator</p>
                <div class="border">
                    <input type="text" id="resultScreen" value="" disabled>
                    <div id="calcGrid">
                        <button type="button" id="operator" value="+">+</button>
                        <button type="button" id="operator" value="-">-</button>
                        <button type="button" id="operator" value="*">*</button>
                        <button type="button" id="operator" value="/">/</button>
        
                        <button type="button" id="number" value="7">7</button>
                        <button type="button" id="number" value="8">8</button>
                        <button type="button" id="number" value="9">9</button>
        
                        <button type="button" id="number" value="4">4</button>
                        <button type="button" id="number" value="5">5</button>
                        <button type="button" id="number" value="6">6</button>
        
                        <button type="button" id="number" value="1">1</button>
                        <button type="button" id="number" value="2">2</button>
                        <button type="button" id="number" value="3">3</button>
        
                        <button type="button" id="plusMinus" value="-">+/-</button>
                        <button type="button" id="number" value="0">0</button>
                        <button type="button" id="number" value=".">.</button>
                        <button type="button" id="clear" value="delete">AC</button>
        
                        <button type="button" id="isEqual" value="=">=</button>
                    </div>
                </div>
            </div>
        </body>
            ';
        echo $args['after_widget'];
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'Another', 'sub_domain' );
		?>


		<p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>">
            <?php esc_attr_e( 'Title:', 'sub_domain' ); ?>
            </label> 
        <input 
            class="widefat" 
            id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" 
            name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" 
            type="text" 
            value="<?php echo esc_attr( $title ); ?>">
            </p>
            

		<?php 
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';

		return $instance;
	}

} // class Foo_Widget




