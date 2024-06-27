<?php 
/**
 * Assign variable for image ID.
 */
$attachment_id_1 = block_value( 'image-1' );
$attachment_id_2 = block_value( 'image-2' );

/**
 * checking first image 
 */
if ($attachment_id_1 && is_int($attachment_id_1) && $attachment_id_1 > 0) {
    $thumb_1 = wp_get_attachment_url($attachment_id_1);
} else {
    $thumb_1 = 'https://placehold.co/700x500'; // Default placeholder image URL
}
/**
 * checking first image 
 */
if ($attachment_id_2 && is_int($attachment_id_2) && $attachment_id_2 > 0) {
    $thumb_2 = wp_get_attachment_url($attachment_id_2);
} else {
    $thumb_2 = 'https://placehold.co/700x500'; // Default placeholder image URL
}

?>

<div class="toggle-block">
    
    <div class="container">
        <div class="image-block active">
            <figure>
                <img 
                    src="<?php  echo esc_attr($thumb_1); ?>" 
                    alt="
                        <?php 
                            printf(
                                esc_attr__( '%s', 'campuspress-child' ),
                                esc_attr(block_field( 'title-1'))
                            );
                        ?>
                    ">
                <figcaption class="number"><?php echo esc_html__('01', 'campuspress-child') ?></figcaption>
            </figure>
        </div>
        <div class="image-block">
            <figure>
                <img 
                    src="<?php  echo esc_attr($thumb_2); ?>" 
                    alt="
                        <?php 
                            printf(
                                esc_html__( '%s', 'campuspress-child' ),
                                esc_html(block_field( 'title-2'))
                            );
                        ?>
                    ">
                <figcaption class="number"><?php echo esc_html__('02', 'campuspress-child') ?></figcaption>
            </figure>
        </div>
    </div>
    <div class="content active">
        <h2>
            <?php 
                printf(
                    esc_html__( '%s', 'campuspress-child' ),
                    esc_html(block_field( 'title-1'))
                );
            ?>
        </h2>
        <p>
            <?php 
                printf(
                    esc_html__( '%s', 'campuspress-child' ),
                    esc_html(block_field( 'description-1'))
                );
            ?>
        </p>
        <?php 
            $url = block_field( 'button-url-1', false );

            if ( ! empty( $url ) ) {
                echo '<a href="' . esc_url( $url ) . '">' . esc_html__( 'Read More', 'campuspress-child' ) . '</a>';
            }
        ?>
    </div>
    <div class="content">
        <h2>
        <?php 
            printf(
                esc_html__( '%s', 'campuspress-child' ),
                esc_html(block_field( 'title-2'))
            );
        ?>
        </h2>
        <p>
            <?php 
                printf(
                    esc_html__( '%s', 'campuspress-child' ),
                    esc_html(block_field( 'description-1'))
                );
            ?>
        </p>
        <?php 
            $url = block_field( 'button-url-2', false );

            if ( ! empty( $url ) ) {
                echo '<a href="' . esc_url( $url ) . '">' . esc_html__( 'Read More', 'campuspress-child' ) . '</a>';
            }
        ?>
    </div>
</div>
