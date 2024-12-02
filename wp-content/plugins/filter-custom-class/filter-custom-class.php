<?php

/**
 * Plugin Name:     Filter Custom Class
 * Plugin URI:      https://github.com/lucaskennde/skills-wordpress
 * Description:     update to all tags <p> and add custom class
 * Author:          LUCAS KENNDE ARAÚJO DE MOURA
 * Author URI:      https://github.com/lucaskennde
 * Text Domain:     filter-custom-class
 * Domain Path:     /languages
 * Version:         0.1.0
 * Requires PHP:    7.4
 * @package         Filter_Custom_Class
 */

class addCustomClassToTagParagraphs
{
    private $custom_class;

    public function __construct($custom_name  = 'custom-class')
    {
        $this->custom_class = $custom_name;
        add_filter('the_content', [$this, 'add_custom_class']);
    }

    public function add_custom_class($content)
    {
        return str_replace('<p>', '<p class="' . esc_attr($this->custom_class) . '">', $content);
    }
}

new addCustomClassToTagParagraphs();
