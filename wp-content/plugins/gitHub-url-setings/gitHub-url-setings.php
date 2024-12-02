<?php

/**
 * Plugin Name:     GitHub Url Setings
 * Plugin URI:      https://github.com/lucaskennde/skills-wordpress
 * Description:     PLUGIN DESCRIPTION HERE
 * Author:          LUCAS KENNDE ARAÚJO DE MOURA
 * Author URI:      https://github.com/lucaskennde
 * Text Domain:     gitHub-url-setings
 * Domain Path:     /languages
 * Version:         0.1.0
 * Requires PHP:    7.4
 * 
 * @package         GitHub_Url_Setings
 */

// Your code starts here.

class GitHubUrlSettings
{

    // Inicializando o construtor adcionando as ações na pagina
    public function __construct()
    {
        add_action('admin_menu', [$this, 'add_admin_page']);
    }

    // Funçõa para adicionar a página ao menu de configurações
    public function add_admin_page()
    {
        add_options_page(
            'Configurar GitHub URL', // Título da página
            'GitHub URL', // Nome no menu
            'manage_options', // Capacidade necessária para acessar
            'github-url-settings', // Slug da página
            [$this, 'render_settings_page']
        );
    }
    public function render_settings_page()
    {
?>
        <div class="wrap">
            <h1>Configurar GitHub URL</h1>
        </div>
<?php
    }
}


new GitHubUrlSettings();
