<?php
// ==============================
// Innovision Theme - functions.php
// ==============================

function innovision_theme_setup()
{
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  // add_theme_support('woocommerce'); // Comment lại vì không dùng WooCommerce
  add_theme_support('menus');
  add_theme_support('html5', array('search-form', 'gallery', 'caption'));
  load_theme_textdomain('innovision', get_template_directory() . '/languages');

  register_nav_menus(array(
    'main-menu'   => __('Main Menu', 'innovision'),
    'footer-menu' => __('Footer Menu', 'innovision'),
  ));
}
add_action('after_setup_theme', 'innovision_theme_setup');

function innovision_enqueue_assets()
{
  $theme_uri = get_template_directory_uri();

  // -----------------------------
  // CSS
  // -----------------------------
  wp_enqueue_style('bootstrap', $theme_uri . '/assets/css/bootstrap.min.css');
  wp_enqueue_style('jquery-ui', $theme_uri . '/assets/css/jquery-ui.css');
  wp_enqueue_style('flaticon', $theme_uri . '/assets/css/flaticon.css');
  wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css');
  wp_enqueue_style('animate', $theme_uri . '/assets/css/animate.css', array(), '1.0.0');
  wp_enqueue_style('owl', $theme_uri . '/assets/css/owl.css', array(), '1.0.0');
  wp_enqueue_style('slick', $theme_uri . '/assets/css/slick.css', array(), '1.0.0');
  wp_enqueue_style('jquery-fancybox', $theme_uri . '/assets/css/jquery.fancybox.min.css', array(), '1.0.0');
  wp_enqueue_style('jquery-mCustomScrollbar', $theme_uri . '/assets/css/jquery.mCustomScrollbar.min.css', array(), '1.0.0');
  wp_enqueue_style('jquery-bootstrap-touchspin', $theme_uri . '/assets/css/jquery.bootstrap-touchspin.css', array(), '1.0.0');
  wp_enqueue_style('responsive', $theme_uri . '/assets/css/responsive.css', array(), '1.0.0');
  wp_enqueue_style('color-switcher-design', $theme_uri . '/assets/css/color-switcher-design.css', array(), '1.0.0');
  wp_enqueue_style('theme-color-file', $theme_uri . '/assets/css/color-themes/default-theme.css', array(), '1.0.0');

  wp_enqueue_style(
    'innovision-style',
    $theme_uri . '/assets/css/style.css',
    array('bootstrap', 'font-awesome'),
    '1.0.0',
    'all'
  );
  wp_enqueue_style('innovision-bootstrap', $theme_uri . '/assets/css/bootstrap.css', array('innovision-style'), '1.0.0', 'all');

  wp_enqueue_style('innovision-responsive', $theme_uri . '/assets/css/responsive.css', array('innovision-style'), '1.0.0', 'all');

  // -----------------------------
  // JS
  // -----------------------------
  wp_enqueue_script('jquery');
  wp_enqueue_script('popper', $theme_uri . '/assets/js/popper.min.js', array('jquery'), null, true);
  wp_enqueue_script('bootstrap', $theme_uri . '/assets/js/bootstrap.min.js', array('jquery'), null, true);
  wp_enqueue_script('mCustomScrollbar', $theme_uri . '/assets/js/jquery.mCustomScrollbar.concat.min.js', array('jquery'), null, true);
  wp_enqueue_script('fancybox', $theme_uri . '/assets/js/jquery.fancybox.js', array('jquery'), null, true);
  wp_enqueue_script('appear', $theme_uri . '/assets/js/appear.js', array('jquery'), null, true);
  wp_enqueue_script('owl', $theme_uri . '/assets/js/owl.js', array('jquery'), null, true);
  wp_enqueue_script('wow', $theme_uri . '/assets/js/wow.js', array('jquery'), null, true);
  wp_enqueue_script('slick', $theme_uri . '/assets/js/slick.js', array('jquery'), null, true);
  wp_enqueue_script('isotope', $theme_uri . '/assets/js/isotope.js', array('jquery'), null, true);
  wp_enqueue_script('jquery-ui', $theme_uri . '/assets/js/jquery-ui.js', array('jquery'), null, true);
  wp_enqueue_script('color-settings', $theme_uri . '/assets/js/color-settings.js', array('jquery'), null, true);
  wp_enqueue_script('innovision-main', $theme_uri . '/assets/js/script.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'innovision_enqueue_assets');

// -----------------------------
// Polylang
// -----------------------------
function innovision_register_strings()
{
  if (function_exists('pll_register_string')) {
    pll_register_string('innovision_site_title', get_bloginfo('name'), 'Innovision Theme');
    pll_register_string('innovision_description', get_bloginfo('description'), 'Innovision Theme');
  }
}
add_action('init', 'innovision_register_strings');
add_theme_support('post-thumbnails');

// ======================================================
// Bootstrap 5 Nav Walker - Tạo menu dropdown hoạt động
// ======================================================

if (!class_exists('WP_Bootstrap_Navwalker')) {
  class WP_Bootstrap_Navwalker extends Walker_Nav_Menu
  {
    // Bắt đầu cấp con
    function start_lvl(&$output, $depth = 0, $args = null)
    {
      $indent = str_repeat("\t", $depth);
      $submenu = ($depth > 0) ? ' sub-menu' : '';
      $output .= "\n$indent<ul class=\"dropdown-menu$submenu depth_$depth\">\n";
    }

    // Bắt đầu 1 item menu
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
      $indent = ($depth) ? str_repeat("\t", $depth) : '';
      $classes = empty($item->classes) ? array() : (array)$item->classes;

      $classes[] = 'nav-item';
      if (in_array('menu-item-has-children', $classes)) {
        $classes[] = 'dropdown';
      }
      if ($depth && in_array('menu-item-has-children', $classes)) {
        $classes[] = 'dropdown-submenu';
      }
      if (in_array('current-menu-item', $classes) || in_array('current_page_item', $classes)) {
        $classes[] = 'active';
      }
      $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
      $class_names = ' class="' . esc_attr($class_names) . '"';
      $output .= $indent . '<li' . $class_names . '>';

      $atts = array();
      $atts['title'] = !empty($item->attr_title) ? $item->attr_title : '';
      $atts['target'] = !empty($item->target) ? $item->target : '';
      $atts['rel'] = !empty($item->xfn) ? $item->xfn : '';
      $atts['href'] = !empty($item->url) ? $item->url : '';
      $atts['class'] = 'nav-link';

      if (in_array('menu-item-has-children', $classes)) {
        $atts['class'] .= ' dropdown-toggle';
        $atts['data-bs-toggle'] = 'dropdown';
        $atts['aria-expanded'] = 'false';
        $atts['role'] = 'button';
      }

      $atts = apply_filters('nav_menu_link_attributes', $atts, $item, $args, $depth);
      $attributes = '';
      foreach ($atts as $attr => $value) {
        if (!empty($value)) {
          $value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
          $attributes .= ' ' . $attr . '="' . $value . '"';
        }
      }

      $title = apply_filters('the_title', $item->title, $item->ID);
      $title = apply_filters('nav_menu_item_title', $title, $item, $args, $depth);

      $item_output = $args->before;
      $item_output .= '<a' . $attributes . '>';
      $item_output .= $args->link_before . $title . $args->link_after;
      $item_output .= '</a>';
      $item_output .= $args->after;

      $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
  }
}

if (!class_exists('WP_Fullscreen_Navwalker')) {
  class WP_Fullscreen_Navwalker extends Walker_Nav_Menu
  {

    // Start level
    public function start_lvl(&$output, $depth = 0, $args = array())
    {
      $indent = str_repeat("\t", $depth);
      $classes = 'sub-menu';
      if ($depth === 0) $classes = ''; // cấp 1, bỏ class nếu muốn
      $output .= "\n$indent<ul class=\"$classes\">\n";
    }

    // Start element
    public function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
    {
      $indent = ($depth) ? str_repeat("\t", $depth) : '';
      $classes = empty($item->classes) ? array() : (array) $item->classes;

      // Nếu có submenu, thêm class dropdown
      if (in_array('menu-item-has-children', $classes)) {
        $classes[] = 'dropdown';
      }

      $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item));
      $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

      $output .= $indent . '<li' . $class_names . '>';

      $atts = array();
      $atts['title']  = !empty($item->attr_title) ? $item->attr_title : '';
      $atts['target'] = !empty($item->target) ? $item->target : '';
      $atts['rel']    = !empty($item->xfn) ? $item->xfn : '';
      $atts['href']   = !empty($item->url) ? $item->url : '';

      $attributes = '';
      foreach ($atts as $attr => $value) {
        if (!empty($value)) {
          $value = esc_attr($value);
          $attributes .= " $attr=\"$value\"";
        }
      }

      $title = apply_filters('the_title', $item->title, $item->ID);

      $output .= '<a' . $attributes . '>' . $title . '</a>';
    }

    public function end_el(&$output, $item, $depth = 0, $args = array())
    {
      $output .= "</li>\n";
    }
  }
}

// -----------------------------
// ACF Options Page
// -----------------------------
if (function_exists('acf_add_options_page')) {
  acf_add_options_page(array(
    'page_title'   => 'Theme General Settings (' . pll_current_language('slug') . ')',
    'menu_title'  => 'Theme Settings (' . pll_current_language('slug') . ')',
    'menu_slug'   => 'theme-general-settings-' . pll_current_language('slug'),
    'capability'  => 'edit_posts',
    'redirect'    => false
  ));
}

// -----------------------------
// Custom Archive Title
// -----------------------------
// add_filter('woocommerce_show_page_title', '__return_false'); // Comment lại vì không dùng WooCommerce

add_filter('get_the_archive_title', function ($title) {
  if (is_category()) {
    $title = single_cat_title('', false); // chỉ lấy tên category
  } elseif (is_tag()) {
    $title = single_tag_title('', false);
  } elseif (is_tax()) {
    $title = single_term_title('', false);
  }
  return $title;
});

// ======================================================
// Blog AJAX - Load Posts với Filter & Pagination
// ======================================================

add_action('wp_enqueue_scripts', 'innovision_blog_enqueue_assets');
function innovision_blog_enqueue_assets()
{
  if (is_page_template(array('template-blog-ajax.php', 'template-blog.php'))) {
    wp_enqueue_script('innovision-blog-js', get_template_directory_uri() . '/assets/js/vinamek-blog.js', array('jquery'), '1.0', true);

    // Localize data for AJAX
    $ajax_data = array(
      'ajax_url' => admin_url('admin-ajax.php'),
      'nonce'    => wp_create_nonce('innovision_blog_nonce'),
      'posts_per_page' => 10,
      'lang' => function_exists('pll_current_language') ? pll_current_language('slug') : ''
    );
    wp_localize_script('innovision-blog-js', 'innovisionBlog', $ajax_data);
  }
}

/**
 * AJAX handler - returns posts HTML + pagination HTML
 */
add_action('wp_ajax_vinamek_load_posts', 'innovision_load_posts_ajax');
add_action('wp_ajax_nopriv_vinamek_load_posts', 'innovision_load_posts_ajax');

function innovision_load_posts_ajax()
{
  check_ajax_referer('innovision_blog_nonce', 'nonce');

  $paged = isset($_POST['paged']) ? intval($_POST['paged']) : 1;
  $category = isset($_POST['category']) && $_POST['category'] !== '' ? sanitize_text_field($_POST['category']) : '';
  $search = isset($_POST['s']) ? sanitize_text_field($_POST['s']) : '';
  $posts_per_page = isset($_POST['ppp']) ? intval($_POST['ppp']) : 10;
  $lang = isset($_POST['lang']) ? sanitize_text_field($_POST['lang']) : '';

  $args = array(
    'post_type' => 'post',
    'posts_per_page' => $posts_per_page,
    'paged' => $paged,
    's' => $search,
  );

  if ($category !== '') {
    $args['category_name'] = $category;
  }

  // Polylang support
  if ($lang && function_exists('pll_current_language')) {
    $args['lang'] = $lang;
  }

  $q = new WP_Query($args);

  ob_start();

  if ($q->have_posts()) {
    while ($q->have_posts()) {
      $q->the_post();
?>
      <article id="post-<?php the_ID(); ?>" class="post-card ajax-post-card">
        <a class="post-link" href="<?php the_permalink(); ?>">
          <div class="post-thumb">
            <?php
            if (has_post_thumbnail()) {
              the_post_thumbnail('medium');
            } else {
              echo '<img src="' . get_template_directory_uri() . '/assets/img/placeholder-600x400.png" alt="' . esc_attr(get_the_title()) . '">';
            }
            ?>
          </div>
          <div class="post-body">
            <h3 class="post-title"><?php the_title(); ?></h3>
            <div class="post-meta">
              <span class="post-date"><?php echo get_the_date('d M, Y'); ?></span>
            </div>
            <div class="post-excerpt">
              <?php
              if (has_excerpt()) {
                echo wp_kses_post(wp_trim_words(get_the_excerpt(), 30, '...'));
              } else {
                echo wp_kses_post(wp_trim_words(get_the_content(), 30, '...'));
              }
              ?>
            </div>
          </div>
        </a>
      </article>
<?php
    }
    wp_reset_postdata();
  } else {
    echo '<p class="no-posts">Không có bài viết.</p>';
  }

  $posts_html = ob_get_clean();

  // pagination
  $total_pages = $q->max_num_pages;
  $pagination_html = '';

  if ($total_pages > 1) {
    $big = 999999999;
    $pagination_html = paginate_links(array(
      'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
      'format' => '?paged=%#%',
      'current' => max(1, $paged),
      'total' => $total_pages,
      'prev_text' => '&laquo; Trước',
      'next_text' => 'Sau &raquo;',
      'type' => 'list',
    ));
  }

  wp_send_json_success(array(
    'posts' => $posts_html,
    'pagination' => $pagination_html,
    'found' => $q->found_posts,
  ));
}

// ======================================================
// WooCommerce - ĐOẠN NÀY ĐÃ COMMENT LẠI
// ======================================================

/*
// Ẩn giá sản phẩm trên trang shop và product
add_filter('woocommerce_get_price_html', '__return_empty_string');

// Ẩn nút "Thêm vào giỏ" mặc định
remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30);

// Thêm nút liên hệ + mô tả dưới giá
add_action('woocommerce_after_shop_loop_item', 'custom_contact_button', 20);
add_action('woocommerce_single_product_summary', 'custom_contact_button', 31);

function custom_contact_button()
{
  $lang = function_exists('pll_current_language') ? pll_current_language() : 'vi';

  $description = ($lang == 'en')
    ? 'Contact us for detailed pricing'
    : 'Liên hệ với chúng tôi để nhận báo giá chi tiết';

  echo '<div class="custom-contact-wrapper" style="margin-top:10px;">';
  echo '<a href="tel:0353226333" class="custom-contact-button" style="
        display:inline-block;
        background-color:#ff0000; 
        color:#ffffff; 
        padding:10px 20px; 
        text-decoration:none;
        font-weight:bold;
        border-radius:4px;
    ">' . ($lang == 'en' ? 'Contact' : 'Liên hệ') . '</a>';

  echo '<p style="margin-top:5px; font-style:italic; color:#666666;">' . esc_html($description) . '</p>';
  echo '</div>';
}

add_filter('woocommerce_get_price_html', 'vinamek_custom_price_html', 100, 2);
function vinamek_custom_price_html($price, $product) {
  if ($product->get_price()) {
    return $price;
  }
  return '';
}

remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30);

add_action('woocommerce_after_shop_loop_item', 'custom_contact_button', 20);
add_action('woocommerce_single_product_summary', 'custom_contact_button', 31);

function custom_contact_button()
{
  global $product;
  
  $lang = function_exists('pll_current_language') ? pll_current_language() : 'vi';
  
  $has_price = $product->get_price() ? true : false;
  
  $description = ($lang == 'en')
    ? 'Contact us for detailed pricing'
    : 'Liên hệ với chúng tôi để nhận báo giá chi tiết';

  echo '<div class="custom-contact-wrapper" style="margin-top:10px;">';
  
  if ($has_price) {
    echo '<div class="product-price" style="margin-bottom:10px; font-size:18px; font-weight:bold; color:#333;">';
    echo $product->get_price_html();
    echo '</div>';
  }
  
  echo '<a href="tel:0353226333" class="custom-contact-button" style="
        display:inline-block;
        background-color:#ff0000; 
        color:#ffffff; 
        padding:10px 20px; 
        text-decoration:none;
        font-weight:bold;
        border-radius:4px;
    ">' . ($lang == 'en' ? 'Contact' : 'Liên hệ') . '</a>';

  if (!$has_price) {
    echo '<p style="margin-top:5px; font-style:italic; color:#666666;">' . esc_html($description) . '</p>';
  }
  
  echo '</div>';
}

add_action('after_setup_theme', function () {
  add_theme_support('woocommerce');
  add_theme_support('wc-product-gallery-zoom');
  add_theme_support('wc-product-gallery-lightbox');
  add_theme_support('wc-product-gallery-slider');
});

function vinamek_enqueue_wc_gallery_assets()
{
  if (is_product()) {
    wp_enqueue_script('wc-single-product');
    wp_enqueue_script('zoom');
  }
}
add_action('wp_enqueue_scripts', 'vinamek_enqueue_wc_gallery_assets', 99);

remove_action('woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20);

add_action('woocommerce_before_single_product_summary', 'vinamek_custom_product_gallery', 20);

function vinamek_custom_product_gallery()
{
  global $product;
  if (!$product) return;

  $image_ids = array_merge(
    array($product->get_image_id()),
    $product->get_gallery_image_ids()
  );
  if (!$image_ids) $image_ids = array(0);

  echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />';
  echo '<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>';

  echo '<div class="vinamek-gallery-wrapper">';

  $first_image = $image_ids[0] ? wp_get_attachment_url($image_ids[0]) : wc_placeholder_img_src();
  echo '<div class="vinamek-main-image">';
  echo '<img id="vinamek-main-img" src="' . esc_url($first_image) . '" alt="' . esc_attr(get_the_title()) . '">';
  echo '</div>';

  if (count($image_ids) > 1) {
    echo '<div class="vinamek-thumbnails swiper">';
    echo '<div class="swiper-wrapper">';
    foreach ($image_ids as $index => $id) {
      $thumb_url = $id ? wp_get_attachment_url($id) : wc_placeholder_img_src();
      echo '<div class="swiper-slide"><img data-index="' . $index . '" src="' . esc_url($thumb_url) . '" alt="' . esc_attr(get_the_title()) . '" class="vinamek-thumb"></div>';
    }
    echo '</div>';
    echo '</div>';
  }

  echo '</div>';

  // CSS và JS cho gallery đã bị comment
}

remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);

add_action('woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 50);

function vinamek_product_has_price($product) {
  $price = $product->get_price();
  return !empty($price) && $price > 0;
}

add_filter('woocommerce_is_purchasable', 'vinamek_hide_add_to_cart_for_no_price', 10, 2);
function vinamek_hide_add_to_cart_for_no_price($purchasable, $product) {
  if (!vinamek_product_has_price($product)) {
    return false;
  }
  return $purchasable;
}

add_action('woocommerce_after_shop_loop_item', 'vinamek_custom_contact_button_loop', 10);
add_action('woocommerce_single_product_summary', 'vinamek_custom_contact_button_single', 30);

function vinamek_custom_contact_button_loop() {
  global $product;
  if (!vinamek_product_has_price($product)) {
    vinamek_render_contact_button();
  }
}

function vinamek_custom_contact_button_single() {
  global $product;
  if (!vinamek_product_has_price($product)) {
    vinamek_render_contact_button();
  }
}

function vinamek_render_contact_button() {
  $lang = function_exists('pll_current_language') ? pll_current_language() : 'vi';
  
  $button_text = ($lang == 'en') ? 'Contact' : 'Liên hệ';
  $description = ($lang == 'en') 
    ? 'Contact us for detailed pricing' 
    : 'Liên hệ với chúng tôi để nhận báo giá chi tiết';
  
  echo '<div class="custom-contact-wrapper" style="margin-top:10px;">';
  echo '<a href="tel:0353226333" class="custom-contact-button" style="
        display:inline-block;
        background-color:#ff0000; 
        color:#ffffff; 
        padding:10px 20px; 
        text-decoration:none;
        font-weight:bold;
        border-radius:4px;
        transition: background-color 0.3s ease;
    " onmouseover="this.style.backgroundColor=\'#cc0000\'" onmouseout="this.style.backgroundColor=\'#ff0000\'">' 
    . esc_html($button_text) . 
  '</a>';
  
  echo '<p style="margin-top:5px; font-style:italic; color:#666666; font-size:14px;">' 
    . esc_html($description) . 
  '</p>';
  
  echo '</div>';
}

add_filter('woocommerce_get_price_html', 'vinamek_custom_empty_price_html', 100, 2);
function vinamek_custom_empty_price_html($price, $product) {
  if (!vinamek_product_has_price($product)) {
    return '';
  }
  return $price;
}
*/

// ======================================================
// KẾT THÚC PHẦN WOOCOMMERCE ĐÃ COMMENT
// ======================================================