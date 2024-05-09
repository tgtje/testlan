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
    $text = "This page allows you to create a user, who is immediately a normal member of the site, with whatever class memberships you assign.<br /><br />
	If you check the 'Send confirmation email with password to new user' box, the login name and password are sent <b>in clear</b>, so the user must change
	their password on receipt.
	";
    break;

  case 'prune' :
	$text = "Bulk deletes unwanted users from the database. These may be either those who failed to complete the registration process, or 
	those whose email addresses bounced. Any forum posts, comments etc remain, and are flagged as from a 'Deleted User'.
	";
	break;

  case 'unverified' :
	$text = "Shows those members who have failed to complete their registration. Options generally as for the complete members list.";
    break;

  case 'options' :
	$text = "Sets various options affecting all users.<br /><br />
	<b>Allow Avatar Upload</b><br />
	If enabled, users may upload an avatar of their choice, which is stored on your server. This can have security implications.<br /><br />
	<b>Allow Photo Upload</b><br />
	If enabled, users may upload a photo of their choice, which is stored on your server. This can have security implications.<br /><br />
	<b>Online User Tracking</b><br />
	This must be enabled to keep track of most user activity, including counts of online members. It does increase database activity significantly.<br /><br />
	<b>Member Information</b><br />
	Determines which class of members can view the member list.
	";
    break;

  default :
	$text = USRLAN_258;
}


$ns -> tablerender($caption, $text);
unset($text);