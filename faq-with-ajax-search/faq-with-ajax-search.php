<?php 

/*
* Plugin Name: FAQ With AJAX Search
* Description: Add Multiple FAQ & Also AJAX Search Option
* Author: Jawad Abbasi
* Author URI: https://jawad-developer.com
* Version: 1.0
* Text Domain: fwas

 * WP FAQ is free plugin: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * any later version.
 *
 * WP FAQ is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with WP FAQ. If not, see <https://www.gnu.org/licenses/>.
*/

if(!defined('ABSPATH')){
    exit;
}

define('fwas_plugin_dir_path', plugin_dir_path(__FILE__));
define('fwas_plugin_dir_url', plugin_dir_url(__FILE__));

include fwas_plugin_dir_path. '/includes/fwas-post-type.php';


function fwas_display_faqs_shortcode(){
    ob_start();
    ?>
    <div class="faq-wrapper">
    <input type="text" id="faq-search" placeholder="Search">
        <div id="faq-search-results"></div>
        <?php
            $args = array(
                'post_type' => 'fwas',
                'posts_per_page' => -1,
                'orderby' => 'title',
                'order' => 'ASC',
            );
            $faqs = new WP_Query($args);
            if ($faqs->have_posts()) :
                while ($faqs->have_posts()) :
                    $faqs->the_post();
                    $question = get_the_title();
                    $answer = get_the_content();
                    ?>
                    <div class="faq">
                    <h3 class="faq-question"><?php esc_attr_e($question); ?></h3>
                    <div class="faq-answer"><p><?php esc_attr_e($answer); ?></p></div>
                    </div>
                    <?php
                endwhile;
            endif;
            wp_reset_postdata();
        ?>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('fwas', 'fwas_display_faqs_shortcode');


// Enqueue scripts
function fwas_faq_enqueue_scripts() {
    wp_enqueue_script('jquery');
    wp_enqueue_script('jquery-ui-accordion');

    wp_enqueue_style('fwas-css', fwas_plugin_dir_url . 'assets/css/fwas-style.css');
    wp_enqueue_style('jquery-ui-style', fwas_plugin_dir_url . 'assets/css/jquery-ui.css');

    wp_enqueue_script('fwas-scripts', fwas_plugin_dir_url . 'assets/js/fwas-scripts.js', array('jquery'), '1.0', true);
    wp_localize_script('fwas-scripts', 'faq_ajax_object', array('ajax_url' => admin_url('admin-ajax.php')));
}
add_action('wp_enqueue_scripts', 'fwas_faq_enqueue_scripts'); 