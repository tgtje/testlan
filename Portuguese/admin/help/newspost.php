<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2009 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 *
 *
 * $Source: /cvs_backup/e107_0.8/e107_languages/English/admin/help/newspost.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }

$caption = LAN_NEWS_115;
$action = varset($_GET['action']);
switch ($action)
{
 case 'create' :
	$text = LAN_NEWS_114;
	break;;
  case 'cat' :
	$text = "Você pode separar suas notícias em categorias diferentes e permitir que os visitantes exibam apenas as notícias nessas categorias. <br /><br />Envie suas imagens de ícones de notícias em ".e_THEME."-yourtheme-/images/ ou em themes/shared/newsicons/.";
    break;
  case 'pref' :
    $text = 'Defina diversas opções relacionadas a notícias<br /><br />
<b>Colunas de categorias de notícias</b><br />
Requer que o suporte ao tema seja selecionável<br /><br />
<b>Postagens de notícias a serem exibidas por página</b><br />
Para a página principal de notícias; exibe itens em formato não estendido.<br /><br />
<b>Postagens de notícias para exibir no arquivo</b><br />
Define o número de postagens de notícias que são exibidas apenas como título em cada página de notícias (incluídas no total anterior).<br /><br />
<b>Ativar editor WYSIWYG</b><br />
Requer que os usuários que podem enviar notícias também possam postar HTML.
	';
	break;
  case 'list' :
  default :
	$text = LAN_NEWS_113;
}
$ns -> tablerender($caption, $text);
