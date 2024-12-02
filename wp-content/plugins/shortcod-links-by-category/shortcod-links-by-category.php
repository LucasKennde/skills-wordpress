<?php

/**
 * Plugin Name:     Shortcod Links By Category
 * Plugin URI:      https://github.com/lucaskennde/skills-wordpress
 * Description:     A classe addCustomClassToTagParagraphs permite adicionar uma classe CSS personalizada a todas as tags <p> (parágrafos) dentro do conteúdo de um post ou página do WordPress. Isso é útil quando você deseja aplicar um estilo específico aos parágrafos em todo o conteúdo, sem precisar alterar manualmente o HTML.
 * Author:          LUCAS KENNDE ARAÚJO DE MOURA
 * Author URI:      https://github.com/lucaskennde
 * Text Domain:     shortcod-links-by-category
 * Domain Path:     /languages
 * Version:         0.1.0
 * Requires PHP:    7.4
 * 
 * @package         Shortcod_Links_By_Category
 */

// Your code starts here.
class postsByCategory
{
    public function __construct()
    {
        add_shortcode('related_posts', [$this, 'render_posts']);
    }
    public function render_posts()
    {
        if (!is_singular('posts')) return ''; //Verifica se tem posts
        echo "<script>alert('deu bom não')</script>";
        $categories = get_the_category();
        if (empty($categories)) return '';

        $category_id = wp_list_pluck($categories, 'term_id');

        $args = [
            'category__in' => $category_id,
            'post__not_in' => [get_the_ID()],
            'posts_per_page' => 5,
            'orderby' => 'date',
            'order' => 'DESC',
        ];

        $query = new WP_Query($args);
        if (!$query->have_posts()) return '';

        $output = '<h3>Mais Artigos</h3>';
        $output .= '<ul>';
        while ($query->have_posts()) {
            $query->the_post();
            $output .= '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
        }
        $output .= '</ul>';
        wp_reset_postdata();
        return $output;
    }
}

new postsByCategory();
