=== Shortcod Links By Category ===
Contributors: (this should be a list of wordpress.org userid's)
Donate link: https://example.com/
Tags: comments, spam
Requires at least: 4.5
Tested up to: 6.7.1
Requires PHP: 5.6
Stable tag: 0.1.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

# Descrição:
O plugin "Shortcod Links By Category" permite exibir posts relacionados por categoria utilizando um shortcode. O shortcode [related_posts] pode ser inserido em qualquer página ou post para mostrar uma lista de 5 posts recentes que pertencem à mesma categoria do post atual. Ele pode ser útil para aumentar a navegação interna e manter os leitores no seu site.

# Funcionalidade
O plugin adiciona um shortcode chamado [related_posts] que, quando utilizado, exibe uma lista de posts relacionados com o post atual, com base nas categorias associadas.
Exibe até 5 posts, exceto o post atual.
Exibe os posts mais recentes primeiro.
Não exibe nada se o post não tiver categorias ou se não houver posts relacionados.
# Instalação
Baixar e instalar o plugin

Baixe o arquivo do plugin ou clone o repositório do GitHub: GitHub - Shortcod Links By Category.
Após baixar, extraia o conteúdo na pasta wp-content/plugins/shortcod-links-by-category/.
Ativar o plugin

No painel do WordPress, vá até "Plugins" > "Plugins Instalados".
Encontre o plugin Shortcod Links By Category e clique em Ativar.
Usar o Shortcode

## Após a ativação, insira o shortcode [related_posts] em qualquer página ou post onde você deseja exibir os links relacionados por categoria.
## Observações
Certifique-se de que o post esteja associado a pelo menos uma categoria, pois o plugin depende disso para mostrar os posts relacionados.
O plugin usa WP_Query para recuperar posts da mesma categoria, portanto, é importante que o seu site tenha conteúdo relevante e bem categorizado.