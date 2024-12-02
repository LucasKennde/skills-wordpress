=== Filter Custom Class ===
Contributors: (this should be a list of wordpress.org userid's)
Donate link: https://example.com/
Tags: comments, spam
Requires at least: 4.5
Tested up to: 6.7.1
Requires PHP: 5.6
Stable tag: 0.1.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html


# Descrição
## A classe addCustomClassToTagParagraphs permite adicionar uma classe CSS personalizada a todas as tags <p> (parágrafos) dentro do conteúdo de um post ou página do WordPress. Isso é útil quando você deseja aplicar um estilo específico aos parágrafos em todo o conteúdo, sem precisar alterar manualmente o HTML.

# Funcionalidade
## A classe permite configurar uma classe CSS personalizada para ser adicionada automaticamente a todas as tags <p> no conteúdo de posts ou páginas.
## O nome da classe pode ser definido ao instanciar a classe, sendo custom-class o valor padrão.
## A classe é adicionada ao conteúdo do post utilizando o filtro the_content, que é executado sempre que o conteúdo do post é exibido.

# Como funciona
# Construtor: Ao instanciar a classe, você pode passar um nome de classe personalizada para os parágrafos. Se nenhum nome for fornecido, o nome padrão será custom-class.
# Filtro: A classe utiliza o filtro the_content do WordPress para interceptar o conteúdo do post ou página e substituir todas as tags <p> pela mesma tag, mas com a classe personalizada atribuída.


# Instalação
## Esta seção descreve como instalar o plugin e configurá-lo para funcionar.

### Faça o upload do arquivo plugin-name.php para o diretório /wp-content/plugins/
### Ative o plugin através do menu 'Plugins' no WordPress