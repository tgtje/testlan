<?php
/*
 * Copyright e107 Inc e107.org, Licensed under GNU GPL (http://www.gnu.org/licenses/gpl.txt)
 * $Id$
 *
 * Frontpage Admin Help
 * 
*/

if (!defined('e107_INIT')) { exit; }

$caption = FRTLAN_63;
/* FIXME - English native speakers: what should stay and what should go? 
	<p>
		The list of rules are scanned in turn, until the class of the current user matches. 
		This then determines the user's front (home) page, and also the page he sees immediately after login.
	</p>
 */
$text = FRTLAN_62;
$ns->tablerender($caption, $text,);