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
 * $Source: /cvs_backup/e107_0.8/e107_languages/English/admin/help/users.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }

$caption = USRLAN_259;
if (e_QUERY) list($action,$junk) = explode('.',e_QUERY); else $action = 'list';

switch ($action)
{
  case 'create' :
    $text = "Esta página permite que você crie um utilizador, que é imediatamente um membro normal do site, com qualquer associação de classe que você atribuir.<br /><br />
Se você marcar a caixa 'Enviar endereço electrónico de confirmação com senha para novo utilizador', o nome de entrar e a senha serão enviados <b>em claro</b>, portanto o utilizador deverá alterar
sua senha no recebimento.
	";
    break;

  case 'prune' :
	$text = "Exclui em massa usuários indesejados do banco de dados. Podem ser aqueles que não conseguiram concluir o processo de registro ou
aqueles cujos endereços de endereço electrónico foram devolvidos. Quaisquer postagens no fórum, comentários etc. permanecem e são sinalizados como sendo de um 'Utilizador Excluído'.
	";
	break;

  case 'unverified' :
	$text = "Mostra os membros que não conseguiram completar o seu registo. Opções geralmente como a lista completa de membros.";
    break;

  case 'options' :
	$text = "Define diversas opções que afetam todos os usuários.<br /><br />
<b>Permitir carregamento de avatar</b><br />
Se ativado, os usuários poderão fazer carregamento de um avatar de sua escolha, que será armazenado em seu servidor. Isto pode ter implicações de segurança.<br /><br />
<b>Permitir carregamento de fotos</b><br />
Se ativado, os usuários poderão fazer carregamento de uma foto de sua escolha, que será armazenada em seu servidor. Isto pode ter implicações de segurança.<br /><br />
<b>Rastreamento de usuários on-line</b><br />
Isso deve ser ativado para acompanhar a maioria das atividades do utilizador, incluindo contagens de membros online. Ele aumenta significativamente a atividade do banco de dados.<br /><br />
<b>Informações do Sócio</b><br />
Determina qual classe de membros pode visualizar a lista de membros.
	";
    break;

  default :USRLAN_258;
}


$ns -> tablerender($caption, $text);
unset($text);