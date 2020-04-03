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
        $pinterest = $instance['degasa_pinterest'];
        $linkedin = $instance['degasa_linkedin'];
        $youtube = $instance['degasa_youtube'];
        $whatsapp = $instance['degasa_whatsapp'];
        $twitter = $instance['degasa_twitter'];
        $instagram = $instance['degasa_instagram'];
        $whatsapp_text = $instance['degasa_whatsapp_text'];

        echo $args['before_widget'];
        if ( ! empty( $title ) ){
        echo $args['before_title'] . $title . $args['after_title'];
        }

        if($whatsapp):
            $whatsapp__url = "https://wa.me/".$whatsapp;
            if($whatsapp_text):
                $whatsapp__url = "https://wa.me/".$whatsapp.'?text='.$whatsapp_text;
            endif;
        endif;

        echo "<div class='social-container'>";
        if( ! empty($facebook)){
            echo "<a href='".$facebook."' target='_blank'><div class='item'><img class='no-hover' src='".get_template_directory_uri().'/img/icons/facebook.png'."' alt=''><img class='hover' src='".get_template_directory_uri().'/img/icons/facebook-alternate.png'."' alt=''></div></a>";
        }
        if( ! empty($linkedin)){
            echo "<a href='".$linkedin."' target='_blank'><div class='item'><img class='no-hover' src='".get_template_directory_uri().'/img/icons/linkedin.png'."' alt=''><img class='hover' src='".get_template_directory_uri().'/img/icons/linkedin-alternate.png'."' alt=''></div></a>";
        }
        if( ! empty($instagram)){
            echo "<a href='".$instagram."' target='_blank'><div class='item'><img class='no-hover' src='".get_template_directory_uri().'/img/icons/instagram.png'."' alt=''><img class='hover' src='".get_template_directory_uri().'/img/icons/instagram-alternate.png'."' alt=''></div></a>";
        }
        if( ! empty($twitter)){
            echo "<a href='".$twitter."' target='_blank'><div class='item'><img class='no-hover' src='".get_template_directory_uri().'/img/icons/twitter.png'."' alt=''><img class='hover' src='".get_template_directory_uri().'/img/icons/twitter-alternate.png'."' alt=''></div></a>";
        }
        if( ! empty($youtube)){
            echo "<a href='".$youtube."' target='_blank'><div class='item'><img class='no-hover' src='".get_template_directory_uri().'/img/icons/youtube.png'."' alt=''><img class='hover' src='".get_template_directory_uri().'/img/icons/youtube-alternate.png'."' alt=''></div></a>";
        }
        if( ! empty($pinterest)){
            echo "<a href='".$pinterest."' target='_blank'><div class='item'><img class='no-hover' src='".get_template_directory_uri().'/img/icons/pinterest.png'."' alt=''><img class='hover' src='".get_template_directory_uri().'/img/icons/pinterest-alternate.png'."' alt=''></div></a>";
        }
        if( ! empty($whatsapp)){
            echo "<a href='".$whatsapp__url."' target='_blank'><div class='item'><img class='no-hover' src='".get_template_directory_uri().'/img/icons/whatsapp.png'."' alt=''><img class='hover' src='".get_template_directory_uri().'/img/icons/whatsapp-alternate.png'."' alt=''></div></a>";
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

    if ( isset( $instance[ 'degasa_youtube' ] ) ) {
        $youtube = $instance[ 'degasa_youtube' ];
    }else{
        $youtube = __( '#', 'degasa_widget_domain' );
    }

    if ( isset( $instance[ 'degasa_linkedin' ] ) ) {
        $linkedin = $instance[ 'degasa_linkedin' ];
    }else{
        $linkedin = __( '#', 'degasa_widget_domain' );
    }

    if ( isset( $instance[ 'degasa_pinterest' ] ) ) {
        $pinterest = $instance[ 'degasa_pinterest' ];
    }else{
        $pinterest = __( '#', 'degasa_widget_domain' );
    }

    if ( isset( $instance[ 'degasa_whatsapp' ] ) ) {
        $whatsapp = $instance[ 'degasa_whatsapp' ];
    }else{
        $whatsapp = __( '#', 'degasa_widget_domain' );
    }

    if ( isset( $instance[ 'degasa_whatsapp_text' ] ) ) {
        $whatsapp_text = $instance[ 'degasa_whatsapp_text' ];
    }else{
        $whatsapp_text = __( '#', 'degasa_widget_domain' );
    }

    if ( isset( $instance[ 'degasa_instagram' ] ) ) {
        $instagram = $instance[ 'degasa_instagram' ];
    }else{
        $instagram = __( '#', 'degasa_widget_domain' );
    }

    if ( isset( $instance[ 'degasa_twitter' ] ) ) {
        $twitter = $instance[ 'degasa_twitter' ];
    }else{
        $twitter = __( '#', 'degasa_widget_domain' );
    }
// Widget admin form
?>
<p>
    <label for="<?php echo $this->get_field_id( 'title' ); ?>"><strong><?php _e( 'Title:' ); ?></strong></label>
    <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>

<ul>
    <li>
        <label for="<?php echo $this->get_field_id('degasa_facebook');?>"><strong><?php _e( 'Facebook:' ); ?></strong></label>
        </br>
        <input type="text" id="<?php echo $this->get_field_id('degasa_facebook');?>" name="<?php echo $this->get_field_name('degasa_facebook');?>" value="<?php echo esc_attr( $facebook ); ?>">
        <hr>
    </li>
    <li>
        <label for="<?php echo $this->get_field_id('degasa_linkedin');?>"><strong><?php _e( 'LinkedIn:' ); ?></strong></label></br>
        <input type="text" id="<?php echo $this->get_field_id('degasa_linkedin');?>" name="<?php echo $this->get_field_name('degasa_linkedin');?>" value="<?php echo esc_attr( $linkedin ); ?>">
        <hr>
    </li>
    <li>
        <label for="<?php echo $this->get_field_id('degasa_instagram');?>"><strong><?php _e( 'Instagram:' ); ?></strong></label></br>
        <input type="text" id="<?php echo $this->get_field_id('degasa_instagram');?>" name="<?php echo $this->get_field_name('degasa_instagram');?>" value="<?php echo esc_attr( $instagram ); ?>">
        <hr>
    </li>
    <li>
        <label for="<?php echo $this->get_field_id('degasa_twitter');?>"><strong><?php _e( 'Twitter:' ); ?></strong></label></br>
        <input type="text" id="<?php echo $this->get_field_id('degasa_twitter');?>" name="<?php echo $this->get_field_name('degasa_twitter');?>" value="<?php echo esc_attr( $twitter ); ?>">
        <hr>
    </li>
    <li>
        <label for="<?php echo $this->get_field_id('degasa_youtube');?>"><strong><?php _e( 'YouTube:' ); ?></strong></label></br>
        <input type="text" id="<?php echo $this->get_field_id('degasa_youtube');?>" name="<?php echo $this->get_field_name('degasa_youtube');?>" value="<?php echo esc_attr( $youtube ); ?>">
        <hr>
    </li>
    <li>
        <label for="<?php echo $this->get_field_id('degasa_pinterest');?>"><strong><?php _e( 'Pinterest:' ); ?></strong></label></br>
        <input type="text" id="<?php echo $this->get_field_id('degasa_pinterest');?>" name="<?php echo $this->get_field_name('degasa_pinterest');?>" value="<?php echo esc_attr( $pinterest ); ?>">
        <hr>
    </li>
    <li>
        <label for="<?php echo $this->get_field_id('degasa_whatsapp');?>"><strong><?php _e( 'Whatsapp:' ); ?></strong></label></br>
        <input type="text" id="<?php echo $this->get_field_id('degasa_whatsapp');?>" name="<?php echo $this->get_field_name('degasa_whatsapp');?>" value="<?php echo esc_attr( $whatsapp ); ?>">
        <br>
        <small>Agrega tu número de whatsapp incluyendo tu código de país al principio ( 52 1 para México). No agregues
            signos ( +, ()) ni
            espacios. <strong>Ejemplo:</strong>5210000000000.</small>
        <br><br>
        <label for="<?php echo $this->get_field_id('degasa_whatsapp_text');?>"><strong><?php _e( 'Mensaje predeterminado:' ); ?></strong></label>
        </br>
        <input type="text" id="<?php echo $this->get_field_id('degasa_whatsapp_text');?>" name="<?php echo $this->get_field_name('degasa_whatsapp_text');?>" value="<?php echo esc_attr( $whatsapp_text ); ?>">
        <hr>

    </li>

</ul>
<?php
}
public function update( $new_instance, $old_instance ) {
    $instance = array();
    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
    $instance['degasa_facebook'] = ( ! empty( $new_instance['degasa_facebook'] ) ) ? strip_tags( $new_instance['degasa_facebook'] ) : '';
    $instance['degasa_whatsapp'] = ( ! empty( $new_instance['degasa_whatsapp'] ) ) ? strip_tags( $new_instance['degasa_whatsapp'] ) : '';
    $instance['degasa_whatsapp_text'] = ( ! empty( $new_instance['degasa_whatsapp_text'] ) ) ? strip_tags( $new_instance['degasa_whatsapp_text'] ) : '';
    $instance['degasa_instagram'] = ( ! empty( $new_instance['degasa_instagram'] ) ) ? strip_tags( $new_instance['degasa_instagram'] ) : '';
    $instance['degasa_twitter'] = ( ! empty( $new_instance['degasa_twitter'] ) ) ? strip_tags( $new_instance['degasa_twitter'] ) : '';
    $instance['degasa_linkedin'] = ( ! empty( $new_instance['degasa_linkedin'] ) ) ? strip_tags( $new_instance['degasa_linkedin'] ) : '';
    $instance['degasa_pinterest'] = ( ! empty( $new_instance['degasa_pinterest'] ) ) ? strip_tags( $new_instance['degasa_pinterest'] ) : '';
    $instance['degasa_youtube'] = ( ! empty( $new_instance['degasa_youtube'] ) ) ? strip_tags( $new_instance['degasa_youtube'] ) : '';
    return $instance;
}
}
