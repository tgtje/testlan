<?php
/*
+---------------------------------------------------------------+
|        e107 sítio internet content management system Portuguese Language File
|        Released under the terms and conditions of the
|        GNU General Public License (http://gnu.org).
|        Last Modified: 2021/02/13 20:10:34
|
|        $Author: Ricardo $
+---------------------------------------------------------------+
*/

define("LAN_EURL_NAME", "Gerenciar Site URLs");
define("LAN_EURL_NAME_CONFIG", "Perfis");
define("LAN_EURL_NAME_ALIASES", "Aliases");
define("LAN_EURL_NAME_SETTINGS", "Configurações gerais");
define("LAN_EURL_NAME_HELP", "Ajuda");
define("LAN_EURL_EMPTY", "A lista está vazia");
define("LAN_EURL_LEGEND_CONFIG", "Escolha o perfil de URL por área local");
define("LAN_EURL_LEGEND_ALIASES", "Configurar aliases URL Base por perfil de URL");
define("LAN_EURL_DEFAULT", "Padrão");
define("LAN_EURL_PROFILE", "Perfil");
define("LAN_EURL_INFOALT", "Informação");
define("LAN_EURL_PROFILE_INFO", "Perfil de informação não disponível");
define("LAN_EURL_LOCATION", "Localização do perfil");
define("LAN_EURL_LOCATION_NONE", "Arquivo de configuração não está disponível");
define("LAN_EURL_FORM_HELP_DEFAULT", "Alias quando no idioma padrão.");
define("LAN_EURL_FORM_HELP_ALIAS_0", "Valor padrão é");
define("LAN_EURL_FORM_HELP_ALIAS_1", "Alias quando em");
define("LAN_EURL_FORM_HELP_EXAMPLE", "URL base");
define("LAN_EURL_ERR_ALIAS_MODULE", "Alias '%1\$s' não pode ser salvo - há um perfil de URL do sistema com o mesmo nome. Por favor escolha outro valor de alias para perfil de URL do sistema '%2\$s'");
define("LAN_EURL_SURL_UPD", "&nbsp; URLs SEF foram atualizados.");
define("LAN_EURL_SURL_NUPD", "&nbsp; URLs SEF NÃO foram atualizados.");
define("LAN_EURL_SETTINGS_PATHINFO", "Remover o nome do arquivo da URL");
define("LAN_EURL_SETTINGS_MAINMODULE", "Associar o namespace raiz");
define("LAN_EURL_SETTINGS_MAINMODULE_HELP", "Escolha qual área do site será conectada com o URL do site base. Exemplo: Quando a notícia é sua raiz namespace http://yoursite.com/News-Item-Title será associado com notícias (página de exibição do item será resolvida)");
define("LAN_EURL_SETTINGS_REDIRECT", "Redirecionar para o sistema não encontrou a página");
define("LAN_EURL_SETTINGS_REDIRECT_HELP", "Se definido como false, não encontrou a página será direto processada (sem redirecionamento de navegador)");
define("LAN_EURL_SETTINGS_SEFTRANSLATE", "Tipo de criação de string SEF automatizado");
define("LAN_EURL_SETTINGS_SEFTRANSLATE_HELP", "Escolher como será montado seqüência SEF, automaticamente é construído a partir de um valor de título (por exemplo, em notícias, páginas personalizadas, etc.)");
define("LAN_EURL_SETTINGS_SEFTRTYPE_NONE", "Só fixá-lo");
define("LAN_EURL_SETTINGS_SEFTRTYPE_DASHL", "dasherize-para-minúsculas");
define("LAN_EURL_SETTINGS_SEFTRTYPE_DASHC", "Dasherize-de-camelo-caso");
define("LAN_EURL_SETTINGS_SEFTRTYPE_DASH", "Dasherize-com-sem-caso-alteração");
define("LAN_EURL_SETTINGS_SEFTRTYPE_UNDERSCOREL", "sublinhado_para_letra_pequena");
define("LAN_EURL_SETTINGS_SEFTRTYPE_UNDERSCOREC", "Sublinhado_para_letra_grande");
define("LAN_EURL_SETTINGS_SEFTRTYPE_UNDERSCORE", "Sublinhado_SEM_alteração_do_tamanho_de_letra");
define("LAN_EURL_SETTINGS_SEFTRTYPE_PLUSL", "separador+mais+para+letra+pequena");
define("LAN_EURL_SETTINGS_SEFTRTYPE_PLUSC", "separador+mais+para+letra+grande");
define("LAN_EURL_SETTINGS_SEFTRTYPE_PLUS", "separador+mais+SEM+alteração+do+tamanho+de+letra");
define("LAN_EURL_MODREWR_DESCR", "Remove o nome de arquivo de script de entrada (index.php/) de suas URLs. Você precisará de mod_rewrite instalado e rodando em seu servidor (Apache Web Server). Após habilitar essa configuração, vá para a pasta raiz local, renomear htaccess htaccess e modifgy <em>'RewriteBase'</em> directiva se necessário.");
define("LAN_EURL_MENU", "URLs do site");
define("LAN_EURL_MENU_CONFIG", "Perfis de URL");
define("LAN_EURL_MENU_ALIASES", "Aliases");
define("LAN_EURL_MENU_SETTINGS", "Configurações");
define("LAN_EURL_MENU_HELP", "Ajuda");
define("LAN_EURL_MENU_PROFILES", "Perfis");
define("LAN_EURL_UC", "Em construção");
define("LAN_EURL_CORE_MAIN", "Site raiz Namespace - alias não estiver em uso.");
define("LAN_EURL_FRIENDLY", "Amigável");
define("LAN_EURL_LEGACY", "Legado diretos URLs.");
define("LAN_EURL_REWRITE_LABEL", "URLs amigáveis");
define("LAN_EURL_REWRITE_DESCR", "Search engine e utilizador URLs amigáveis.");
define("LAN_EURL_CORE_NEWS", "Notícias");
define("LAN_EURL_NEWS_REWRITEF_LABEL", "URLs amigáveis completo (sem desempenho e mais amigável)");
define("LAN_EURL_NEWS_REWRITE_LABEL", "URLs amigáveis sem ID (sem desempenho, mais amigável)");
define("LAN_EURL_NEWS_REWRITE_DESCR", "Demonstra o hiperligação manual de análise e montagem.");
define("LAN_EURL_NEWS_REWRITEX_LABEL", "URLs amigáveis com ID (desempenho sábio)");
define("LAN_EURL_NEWS_REWRITEX_DESCR", "Demonstra hiperligação automatizado de análise e montagem com base nas regras de rota predefinida.");
define("LAN_EURL_CORE_USER", "Utilizadores");
define("LAN_EURL_USER_REWRITE_LABEL", "URLs amigáveis");
define("LAN_EURL_USER_REWRITE_DESCR", "Search engine e utilizador URLs amigáveis.");
define("LAN_EURL_CORE_PAGE", "Páginas personalizadas");
define("LAN_EURL_PAGE_SEF_LABEL", "URLs amigáveis com ID (desempenho)");
define("LAN_EURL_PAGE_SEF_DESCR", "Search engine e utilizador URLs amigáveis.");
define("LAN_EURL_PAGE_SEFNOID_LABEL", "URLs amigáveis sem ID (sem desempenho, mais amigável)");
define("LAN_EURL_PAGE_SEFNOID_DESCR", "Search engine e utilizador URLs amigáveis.");
define("LAN_EURL_CORE_SEARCH", "Pesquisa");
define("LAN_EURL_SEARCH_DEFAULT_LABEL", "URL de pesquisa padrão");
define("LAN_EURL_SEARCH_DEFAULT_DESCR", "Legado URL direta.");
define("LAN_EURL_SEARCH_REWRITE_LABEL", "URL amigável");
define("LAN_EURL_CORE_SYSTEM", "Sistema");
define("LAN_EURL_SYSTEM_DEFAULT_LABEL", "URLs de sistema padrão");
define("LAN_EURL_SYSTEM_DEFAULT_DESCR", "URLs para páginas como não encontrado, acesso negado, etc.");
define("LAN_EURL_SYSTEM_REWRITE_LABEL", "Sistema amigável URLs");
define("LAN_EURL_SYSTEM_REWRITE_DESCR", "URLs para páginas como não encontrado, acesso negado, etc.");
define("LAN_EURL_CORE_INDEX", "Primeira página");
define("LAN_EURL_CORE_INDEX_INFO", "Primeira página não pode ter um alias.");
define("LAN_EURL_REBUILD", "Reconstruir");
define("LAN_EURL_REGULAR_EXPRESSION", "Expressão regular");
define("LAN_EURL_KEY", "Chave");
define("LAN_EURL_TABLE", "Tabela");
