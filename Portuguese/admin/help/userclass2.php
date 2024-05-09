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
 * $Source: /cvs_backup/e107_0.8/e107_languages/English/admin/help/userclass2.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }

$caption = UCSLAN_92;

if (!($action = vartrue($_GET['action'])))
{
	if (e_QUERY)
	{
	  $qs = explode(".", e_QUERY);
	}
	$action = varset($qs[0],'display');
}
switch ($action)
{
  case 'initial' :
	$text = UCSLAN_94;
	break;
  case 'options' :
	$text = UCSLAN_95;
	break;
  case 'membs' :
    $text = "Agora na página de administração do utilizador";
	break;
  case 'debug' :
	$text = "Somente para usuários avançados - mostra a hierarquia das classes, mais as classes atribuídas e as classes às quais os primeiros 20 membros do site têm acesso.<br />
O número na frente do nome da classe é seu ID exclusivo (número de referência). A classe 'Todos' possui um ID 0 (zero). e107 usa esses IDs para se referir às classes.<br />
Depois do nome da classe vem a visibilidade e editabilidade da classe - [vis:253, edit: 27] por exemplo. Isso significa que a classe estará visível na maioria dos seletores somente se o utilizador atual for membro da classe 253,
e o utilizador poderá editar sua associação de classe somente se for membro da classe 27.<br />
Finalmente, após o '=', há uma lista de todas as classes acima ou abaixo de cada classe na árvore, mais o ID dessa classe. Assim, um utilizador que é membro de uma classe específica irá
ser membro de todas as classes desta lista.<br /><br />
Para ajudar na compreensão, são mostrados os membros da classe dos primeiros 20 membros. A primeira entrada de cada linha mostra as classes das quais o utilizador é membro. O
a segunda entrada lista todas as classes das quais o utilizador é membro quando a herança entra em vigor. A terceira entrada mostra quais associações de classe eles podem editar";
	break;
  case 'test' :
  case 'special' :
    $text = "Não use isto!!! Somente para desenvolvedores!!!";
	break;
  case 'edit' :
  case 'config' :
	$text = UCSLAN_96;
	$text = UCSLAN_97;
	break;
  case 'display' :
  default :
	$text = UCSLAN_93;
}
e107::getRender() -> tablerender($caption, $text);
