<?php
function degasa_load_widget() {
    register_widget( 'degasa_widget' );
}
add_action( 'widgets_init', 'degasa_load_widget' );

// Creating the widget
class degasa_widget extends WP_Widget {
    function __construct() {
        parent::__construct('degasa_widget',__('Degasa Social Icons', 'degasa_widget_domain'),array( 'description' => __( 'Botones de redes sociales.', 'degasa_widget_domain' ), ));
    }

    public function widget( $args, $instance ) {
        $title = apply_filters( 'widget_title', $instance['title'] );
        $facebook = $instance['degasa_facebook'];
        $email = $instance['degasa_email'];

        $twitter = $instance['degasa_twitter'];


        echo $args['before_widget'];
        if ( ! empty( $title ) ){
        echo $args['before_title'] . $title . $args['after_title'];
        }

        echo "<div class='social-container'>";
        if( ! empty($facebook)){
            echo "<a href='".$facebook."' target='_blank'><div class='item'><img class='no-hover' src='".get_template_directory_uri().'/img/icons/icon-facebook-grey.png'."' alt=''><img class='hover' src='".get_template_directory_uri().'/img/icons/icon-facebook-blue.png'."' alt=''></div></a>";
        }

        if( ! empty($twitter)){
            echo "<a href='".$twitter."' target='_blank'><div class='item'><img class='no-hover' src='".get_template_directory_uri().'/img/icons/icon-twitter-grey.png'."' alt=''><img class='hover' src='".get_template_directory_uri().'/img/icons/icon-twitter-blue.png'."' alt=''></div></a>";
        }
        if( ! empty($email)){
            echo "<a href='".$email."' target='_blank'><div class='item'><img class='no-hover' src='".get_template_directory_uri().'/img/icons/icon-email-grey.png'."' alt=''><img class='hover' src='".get_template_directory_uri().'/img/icons/icon-email-blue.png'."' alt=''></div></a>";
        }


        echo "</div>";

        echo $args['after_widget'];
    }


public function form( $instance ) {
    if ( isset( $instance[ 'title' ] ) ) {
        $title = $instance[ 'title' ];
    }else {
        $title = __( 'Redes Sociales', 'degasa_widget_domain' );
    }

    if ( isset( $instance[ 'degasa_facebook' ] ) ) {
        $facebook = $instance[ 'degasa_facebook' ];
    }else{
        $facebook = __( '#', 'degasa_widget_domain' );
    }

    if ( isset( $instance[ 'degasa_twitter' ] ) ) {
        $twitter = $instance[ 'degasa_twitter' ];
    }else{
        $twitter = __( '#', 'degasa_widget_domain' );
    }
    if ( isset( $instance[ 'degasa_email' ] ) ) {
        $email = $instance[ 'degasa_email' ];
    }else{
        $email = __( '#', 'degasa_widget_domain' );
    }
// Widget admin form
?>
<div class="degasa_social_icons_admin_container">
    <p>
        <label for="<?php echo $this->get_field_id( 'title' ); ?>"><strong><?php _e( 'Title:' ); ?></strong></label>
        <img src="<?php echo get_template_directory_uri().'/img/icon-';?>" alt=""><input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
    </p>

    <ul>
        <li>
            <label for="<?php echo $this->get_field_id('degasa_facebook');?>"><strong><?php _e( 'Facebook:' ); ?></strong></label>
            </br>
            <input class="admin-input" type="text" id="<?php echo $this->get_field_id('degasa_facebook');?>" name="<?php echo $this->get_field_name('degasa_facebook');?>" value="<?php echo esc_attr( $facebook ); ?>">
            </br>
            <small>Inserta la url del perfil de Facebook.
                </br>
                <strong>Ejemplo</strong>: https://www.facebook.com/user</small>

            <hr>
        </li>

        <li>
            <label for="<?php echo $this->get_field_id('degasa_twitter');?>"><strong><?php _e( 'Twitter:' ); ?></strong></label></br>
            <input class="admin-input" type="text" id="<?php echo $this->get_field_id('degasa_twitter');?>" name="<?php echo $this->get_field_name('degasa_twitter');?>" value="<?php echo esc_attr( $twitter ); ?>">
            </br>
            <small>Inserta la url del perfil de Twitter.
                </br>
                <strong>Ejemplo</strong>: https://twitter.com/user</small>
            <hr>
        </li>

        <li>
            <label for="<?php echo $this->get_field_id('degasa_email');?>"><strong><?php _e( 'Email:' ); ?></strong></label></br>
            <input class="admin-input" type="text" id="<?php echo $this->get_field_id('degasa_email');?>" name="<?php echo $this->get_field_name('degasa_email');?>" value="<?php echo esc_attr( $email ); ?>">
            </br>
            <small>Inserta tu correo.
                <br><strong>Ejemplo</strong>: correo@correo.com</small>

        </li>



    </ul>
</div>
<?php
}
public function update( $new_instance, $old_instance ) {
    $instance = array();
    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
    $instance['degasa_facebook'] = ( ! empty( $new_instance['degasa_facebook'] ) ) ? strip_tags( $new_instance['degasa_facebook'] ) : '';
    $instance['degasa_twitter'] = ( ! empty( $new_instance['degasa_twitter'] ) ) ? strip_tags( $new_instance['degasa_twitter'] ) : '';
    $instance['degasa_email'] = ( ! empty( $new_instance['degasa_email'] ) ) ? strip_tags( $new_instance['degasa_email'] ) : '';

    return $instance;
}
}
