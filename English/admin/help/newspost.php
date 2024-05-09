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
	break;
  case 'cat' :
	$text = "You can separate your news items into different categories, and allow visitors to display only the news items in those categories. <br /><br />Upload your news icon images into either ".e_THEME."-yourtheme-/images/ or themes/shared/newsicons/.";
    break;
  case 'pref' :
    $text = 'Set various news-related options<br /><br />
	<b>News Category Columns</b><br />
	Requires theme support to be selectable<br /><br />
	<b>News posts to display per page</b><br />
	For the main news page; displays items in unextended format.<br /><br />
	<b>News posts to display in archive</b><br />
	Sets the number of news posts which are displayed as title only on each news page (included in the previous total).<br /><br />
	<b>Enable WYSIWYG editor</b><br />
	Requires that users who can submit news can also post HTML.
	';
	break;
  case 'list' :
  default :
	$text = LAN_NEWS_113;
}
$ns -> tablerender($caption, $text);
