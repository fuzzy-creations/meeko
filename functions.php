<?php
    function fuzzy_meeko_2020_files(){
        wp_enqueue_style('font-awesome', get_theme_file_uri('/images/fontawesome-free-5.14.0-web/css/all.css'));
        wp_enqueue_style('google-font', '//fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,400;1,500');
        wp_enqueue_style('main', get_stylesheet_uri());
        wp_enqueue_script('main-scripts', get_theme_file_uri('/javascript/scripts.js'), '', '', true);
        if (is_home()) {
            wp_enqueue_script('blog-scripts', get_theme_file_uri('/javascript/blog-scripts.js'), '', '', true);
        }
        if (is_page( 'about' )) {
            wp_enqueue_script('about-scripts', get_theme_file_uri('/javascript/about-scripts.js'), '', '', true);
        }
        if (is_page( 'pricing' )) {
            wp_enqueue_script('pricing-scripts', get_theme_file_uri('/javascript/pricing-scripts.js'), '', '', true);
        }
        if (is_single() ) {
            wp_enqueue_script('single-scripts', get_theme_file_uri('/javascript/single-scripts.js'), '', '', true);
        }
        wp_localize_script('blog-scripts', 'blogData', array(
            'root_url' => get_site_url()
        ));
    }
    add_action('wp_enqueue_scripts', 'fuzzy_meeko_2020_files');

    function theme_features(){
        register_nav_menu('headerMenu', 'Header Menu');
        add_theme_support('title-tag'); // tab title
        add_theme_support('post-thumbnails'); // featured images
        add_theme_support('custom-logo'); //site logo
    }
    add_action('after_setup_theme', 'theme_features');


    add_action('category_add_form_fields', 'my_category_fields', 10, 2);
    add_action('category_edit_form_fields', 'my_category_fields', 10, 2);
    function my_category_fields($term) {
            $cat_color = get_term_meta($term->term_id, 'cat_color', true);
            if($cat_color == '') $cat_color = '#000000'; // Default black color

    ?>
    <tr class="form-field">
            <th valign="top" scope="row"><label for="cat_color"><?php _e('Color code'); ?></label></th>
            <td>
                <input type="color" size="40" value="<?php echo esc_attr($cat_color); ?>" id="cat_color" name="cat_color"><br/>
                <span class="description"><?php _e('Please select a color'); ?></span>
            </td>
        </tr>
    <?php
    }
    add_action('edited_category', 'save_my_category_fields', 10, 2);
    add_action('create_category', 'save_my_category_fields', 10, 2);

    function save_my_category_fields($term_id) {
        if (!isset($_POST['cat_color'])) {
            return;
        }
        update_term_meta($term_id, 'cat_color', sanitize_text_field($_POST['cat_color']));
    }

// add_filter('ai1wm_exclude_content_from_export', 'ignoreCertainFiles');

// function ignoreCertainFiles($exclude_filters){
//     $exclude_filters[] = 'themes/fuzzy-meeko-2020/node_modules';
//     return $exclude_filters;
// }


    // IGNORE STICKY POSTS IN MAIN SEARCH 
    add_action('pre_get_posts', 'wpse74620_ignore_sticky');
    // the function that does the work
    function wpse74620_ignore_sticky($query)
    {
        // sure we're were we want to be.
        if (is_home() && $query->is_main_query())
            $query->set('ignore_sticky_posts', true);
    }


?>