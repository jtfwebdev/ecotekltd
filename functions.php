<?php

function enqueue_styles() {
    wp_enqueue_style('my-style', get_stylesheet_uri());

    wp_enqueue_style('tailwind-output', get_template_directory_uri() . '/src/output.css');
}

add_action('wp_enqueue_scripts', 'enqueue_styles');

function enqueue_scripts() {
    
    wp_enqueue_script(
        'reviews-stagger-effect',
        get_template_directory_uri() . '/assets/js/reviews-stagger-effect.js',
        array(),
        '1.0',
        true
    );
    wp_enqueue_script(
        'services-lightbox-effect',
        get_template_directory_uri() . '/assets/js/services-lightbox.js',
        array(),
        '1.0',
        true
    );
}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );

function register_reviews_cpt() {
    $labels = array(
        'name'               => 'Reviews',
        'singular_name'      => 'Review',
        'menu_name'          => 'Reviews',
        'add_new'            => 'Add Review',
        'add_new_item'       => 'Add New Review',
        'edit_item'          => 'Edit Review',
        'new_item'           => 'New Review',
        'view_item'          => 'View Review',
        'all_items'          => 'All Reviews',
        'search_items'       => 'Search Reviews',
        'not_found'          => 'No reviews found',
        'not_found_in_trash' => 'No reviews found in Trash',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'rewrite'            => array('slug' => 'reviews'),
        'supports'           => array('title', 'editor', 'author'),
        'menu_icon'          => 'dashicons-star-filled',
        'show_in_rest'       => false
    );

    register_post_type('review', $args);
}
add_action('init', 'register_reviews_cpt');

function review_add_meta_boxes() {
    add_meta_box(
        'review_details',
        'Review Details',
        'review_meta_box_html',
        'review',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'review_add_meta_boxes');

function review_meta_box_html($post) {
    wp_nonce_field('save_review_meta', 'review_meta_nonce');

    $name = get_post_meta($post->ID, '_reviewer_name', true);
    $date = get_post_meta($post->ID, '_review_date', true);
    $rating = get_post_meta($post->ID, '_star_rating', true);
    $body = get_post_meta($post->ID, '_review_body', true);
    ?>

<p>
    <label for="reviewer_name">Reviewer Name:</label><br>
    <input type="text" name="reviewer_name" id="reviewer_name" value="<?php echo esc_attr($name); ?>"
        style="width:100%;">
</p>

<p>
    <label for="review_date">Review Date:</label><br>
    <input type="date" name="review_date" id="review_date" value="<?php echo esc_attr($date); ?>">
</p>

<p>
    <label for="star_rating">Star Rating (1-5):</label><br>
    <input type="number" name="star_rating" id="star_rating" value="<?php echo esc_attr($rating); ?>" min="1" max="5">
</p>

<p>
    <label for="review_body">Review Body:</label><br>
    <textarea name="review_body" id="review_body" rows="5"
        style="width:100%;"><?php echo esc_textarea($body); ?></textarea>
</p>

<?php
}

function save_review_meta($post_id) {
    if (!isset($_POST['review_meta_nonce']) || !wp_verify_nonce($_POST['review_meta_nonce'], 'save_review_meta')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

    if (!current_user_can('edit_post', $post_id)) return;

    if (isset($_POST['reviewer_name'])) {
        update_post_meta($post_id, '_reviewer_name', sanitize_text_field($_POST['reviewer_name']));
    }

    if (isset($_POST['review_date'])) {
        update_post_meta($post_id, '_review_date', sanitize_text_field($_POST['review_date']));
    }

    if (isset($_POST['star_rating'])) {
        $rating = intval($_POST['star_rating']);
        if ($rating < 1) $rating = 1;
        if ($rating > 5) $rating = 5;
        update_post_meta($post_id, '_star_rating', $rating);
    }

    if (isset($_POST['review_body'])) {
        update_post_meta($post_id, '_review_body', sanitize_textarea_field($_POST['review_body']));
    }
}
add_action('save_post', 'save_review_meta');

// Enquiry form emails

function enqueue_contact_form_script() {
    wp_enqueue_script(
        'contact-form-js',
        get_stylesheet_directory_uri() . '/assets/js/contact-form.js',
        array(),
        null,
        true
    );

    wp_localize_script('contact-form-js', 'contact_ajax', array(
        'ajax_url' => admin_url('admin-ajax.php'),
    ));
}
add_action('wp_enqueue_scripts', 'enqueue_contact_form_script');

function handle_contact_form() {

    if (!isset($_POST['contact_nonce']) || 
        !wp_verify_nonce($_POST['contact_nonce'], 'contact_form_nonce')) {
        wp_send_json_error('Security check failed.');
    }

    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $phone = sanitize_text_field($_POST['phone']);
    $message = sanitize_textarea_field($_POST['message']);

    if (empty($name) || empty($email) || empty($message)) {
        wp_send_json_error('Please fill in all required fields.');
    }

    $to = 'hello@ecotekltd.co.uk';
    $subject = 'New Website Enquiry';

    $body = "
    Name: $name
    Email: $email
    Phone: $phone

    Message:
    $message
    ";

    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        "Reply-To: $email"
    );

    $sent = wp_mail($to, $subject, $body, $headers);

    if ($sent) {
        wp_send_json_success();
    } else {
        wp_send_json_error('Email could not be sent.');
    }
}

add_action('wp_ajax_send_contact_form', 'handle_contact_form');
add_action('wp_ajax_nopriv_send_contact_form', 'handle_contact_form');