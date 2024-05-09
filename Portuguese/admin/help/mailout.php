<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2013 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 */

if (!defined('e107_INIT')) { exit; }

$e107 = e107::getInstance();

$action = e107::getParser()->toDB(varset($_GET['mode'],'makemail'));

  switch ($action)
  {
	case 'justone' :
      $text = 'Enviar endereço electrónico com restrições especificadas por um plugin opcional';
	  break;
	case 'debug' :
      $text = 'Apenas para desenvolvedores. Não utilizado atualmente';
	  break;
	case 'saved' :
      $text = 'Selecione e use um modelo de endereço electrónico salvo para enviar uma mensagem. Exclua qualquer modelo que não seja mais necessário';
	  break;
	case 'pending' :
        $text = LAN_MAILOUT_273;
		break;
	case 'held' :
        $text = LAN_MAILOUT_274;
		break;
	case 'sent' :
      $text = LAN_MAILOUT_275;
	  break;
	case 'savedmail' :
	case 'makemail' :
	case 'main' :
	  $text = LAN_MAILOUT_272;
	  break;
	case 'recipients' :
		$text = LAN_MAILOUT_276;
		break;
	case 'prefs' :
	  $text = LAN_MAILOUT_279;
	  $text .= LAN_MAILOUT_280;
	  break;
	 case 'maint' :
		$text = LAN_MAILOUT_277;
		break;
	default :
      $text = 'Opção não documentada';
  }
$caption = LAN_MAILOUT_278;
$ns->tablerender($caption, $text);
