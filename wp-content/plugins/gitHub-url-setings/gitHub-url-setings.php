<?php

/**
 * Plugin Name:     GitHub Url Setings
 * Plugin URI:      https://github.com/lucaskennde/skills-wordpress
 * Description:     Este plugin permite que os administradores do WordPress adicionem uma URL personalizada do GitHub na página de configurações do painel administrativo. A URL fornecida é salva nas opções do WordPress e, em seguida, inserida automaticamente como uma meta tag no <head> de todas as páginas do site. Isso é útil para verificar habilidades ou associar um perfil GitHub à página web, facilitando a integração de dados de perfil de desenvolvedores e projetos.
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
        add_action('admin_init', [$this, 'register_settings']); // Registra as opções de configurações
        add_action('wp_head', [$this, 'add_github_url_meta']); // Adiciona a meta tag no head
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
            <h1>Configurar URL do GitHub</h1>
            <form method="post" action="options.php">
                <?php
                settings_fields('github_url_options_group');
                do_settings_sections('github-url-settings');
                ?>
                <table class="form-table">
                    <tr valign="top">
                        <th scope="row">URL Salva</th>
                        <td><?php echo esc_attr(get_option('github_url')); ?></td>
                    </tr>
                </table>
                <?php submit_button(); ?>
            </form>
        </div>
<?php
    }

    // função para registrar as opções do github
    public function register_settings()
    {
        register_setting('github_url_options_group', 'github_url', 'esc_url_raw');
        add_settings_section('github_url_section', 'Configurações do GitHub', null, 'github-url-settings');
        add_settings_field(
            'github_url_field',
            'URL do GitHub',
            [$this, 'render_github_url_field'],
            'github-url-settings',
            'github_url_section'
        );
    }
    public function render_github_url_field()
    {
        echo '<input type="url" name="github_url" value="' . esc_attr(get_option('github_url')) . '" class="regular-text" />';
    }
    public function add_github_url_meta()
    {
        $github_url = get_option('github_url');
        if ($github_url) {
            echo '<meta name="verify-skills" content="' . esc_url($github_url) . '" />' . "\n";
        }
    }
}


new GitHubUrlSettings();
