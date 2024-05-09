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
    $text = "Now on user admin page";
	break;
  case 'debug' :
	$text = "For advanced users only - shows the hierarchy of the classes, plus the assigned classes and the classes to which the first 20 site members have access.<br />
	The number in front of the class name is its unique ID (reference number). The 'Everyone' class has an ID of 0 (zero). e107 uses these IDs throughout to refer to classes.<br />
	After the class name is the class visibility and editability - [vis:253, edit: 27] for example. This means that the class will be visible in most selectors only if the current user is a member of class 253, 
	and the user may edit their class membership only if they are a member of class 27.<br />
	Finally, after the '=', is a list of all classes either above or below each class in the tree, plus the ID of that class. Thus a user who is a member of a particular class will
	 be a member of all the classes in this list.<br /><br />
	To help with understanding, the class membership of the first 20 members is shown. The first entry on each line shows the classes of which the user is a member. The 
	 second entry lists all the classes where the user is a member once inheritance takes effect. The third entry shows which class memberships they can edit";
	break;
  case 'test' :
  case 'special' :
    $text = "Don't use this!!! For the devs only!!!";
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
