<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2017 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * Administration Area - User classes
 *
*/

//define("UCSLAN_1", "Cleared all users from class.");
//define("UCSLAN_2", "Class users updated.");
//define("UCSLAN_3", "Class deleted.");//NOT USED
//define("UCSLAN_4", "Please tick the confirm box to delete this user class"); currently not in use
//define("UCSLAN_5", "Class updated.");//LAN_UPDATED.': '.LAN_USERCLASS
//define("UCSLAN_6", "Class saved to database.");//LAN_UPDATED.': '.LAN_USERCLASS
//define("UCSLAN_7", "No user classes yet.");//LAN_NO_RECORDS_FOUND
//define("UCSLAN_8", "Existing Classes");//NOT USED
//define("UCSLAN_9", "No Icon");//NOT USED
// define("UCSLAN_10", "Class not deleted - it is a core class, or is used in the definition of another class, as either parent or edit class");
//define("UCSLAN_11", "tick to confirm");//NOT USED
//define("UCSLAN_12", "Class Name");//LAN_NAME
//define("UCSLAN_13", "Class Description");//LAN_DESCRIPTION
//define("UCSLAN_14", "Update User Class");//LAN_UPDATE
//define("UCSLAN_15", "Create New Class");//LAN_CREATE
//define("UCSLAN_16", "Assign users to class");
//define("UCSLAN_17", "Remove");
//define("UCSLAN_18", "Clear Class");//NOT USED
//define("UCSLAN_19", "Assign users to");
//define("UCSLAN_20", "class");//NOT USED
//define("UCSLAN_21", "User Class Settings");//LAN_SETTINGS
//define("UCSLAN_22", "Users - click to move ...");
//define("UCSLAN_23", "Users in this class ...");
//define("UCSLAN_24", "Class Manager");//LAN_MANAGER
//define("UCSLAN_25", "Create/Edit Classes");//NOT USED
//define("UCSLAN_26", "Class Membership");//NOT USED
//define("UCSLAN_27", "Debug Help");//NOT USED
//define("UCSLAN_28", "Modify Class Membership");
//define("UCSLAN_29", "That class must not be deleted");//NOT USED
define("UCSLAN_30", "Short name displayed in selectors");
define("UCSLAN_31", "Information about applicability of class");
define("UCSLAN_32", "Users in this class can add/remove themselves from the class being edited");
define("UCSLAN_33", "Determines which users can see this class in drop-down lists");
//define("UCSLAN_34", "Class Visibility");//LAN_VISIBILITY
//define("UCSLAN_35", "Class Parent");//LAN_PARENT
define("UCSLAN_36", "If the top of the tree is 'No One', permissions increase towards the top of the tree<br />If the top of the tree is 'Everyone', permissions increase as you go down the tree");
define("UCSLAN_37", "You must enter a name for the class");
define("UCSLAN_38", "Initial User Class");
define("UCSLAN_39", "No classes which can be set");
define("UCSLAN_40", "Set initial classes");
define("UCSLAN_41", "Settings updated");
//define("UCSLAN_42", "Nothing changed - not updated");//LAN_NOCHANGE_NOTSAVED
define("UCSLAN_43", "Existing classes: ");
//define("UCSLAN_44", "None");//LAN_NONE
define("UCSLAN_45", "Point at which classes set:");
define("UCSLAN_46", "(ignored if no verification)");
define("UCSLAN_47", "Initial Signup");
define("UCSLAN_48", "Verification by email or admin");
define("UCSLAN_49", "These classes are set for any newly signed up user - either immediately, or once their site membership has been verified");
//define("UCSLAN_50", "Options/Setup");//NOT USED
//define("UCSLAN_51", "User Class Functions");//NOT USED
//define("UCSLAN_52", "Setup Options");//LAN_OPTIONS
define("UCSLAN_53", "Caution! Only use these options when requested by support.");
define("UCSLAN_54", "Set a default user hierarchy");
define("UCSLAN_55", "Clear the user hierarchy");
define("UCSLAN_56", "(this sets a 'flat' user class structure)");
define("UCSLAN_57", "(the hierarchy can be modified later)");
define("UCSLAN_58", "Execute");
//define("UCSLAN_59", "Enable admin logging of user class edits");//NOT USED
//define("UCSLAN_60", "User Class Configuration options");//NOT USED
//define("UCSLAN_61", "User class setup");//NOT USED
define("UCSLAN_62", "Create default class tree: ");
define("UCSLAN_63", "That class name already exists - please choose another");
define("UCSLAN_64", "completed");
define("UCSLAN_65", "Flatten user class hierarchy: ");
//define("UCSLAN_66", "Confirm flatten user class hierarchy");
//define("UCSLAN_67", "Confirm set default user class hierarchy");
//define("UCSLAN_68", "Class Icon");//LAN_ICON
define("UCSLAN_69", "Optional icon associated with class - directory ");
define("UCSLAN_70", "Rebuilding class hierarchy: ");
define("UCSLAN_71", "User Class Maintenance");
define("UCSLAN_72", "Rebuild class hierarchy ");
define("UCSLAN_73", "(This may be required if database corruption occurs)");

//userclass_class.php
define("UCSLAN_74", "Administrators and Moderators");
define("UCSLAN_75", "Registered and logged in members");
define("UCSLAN_76", "Site Administrators");
define("UCSLAN_77", "Main Site Administrators");
define("UCSLAN_78", "Moderators for Forums and other areas");

//define("UCSLAN_79", "Class Type");
define("UCSLAN_80", "Standard");
define("UCSLAN_81", "Group");
define("UCSLAN_82", "A group brings together a number of individual classes");
define("UCSLAN_83", "Classes in group");
//define("UCSLAN_84", " (Group)");//UCSLAN_81
define("UCSLAN_85", "You have assigned all available classes; please reassign one which is not in use");
define("UCSLAN_86", "Some settings not allowed for admin classes - they have been set to defaults. ");
define("UCSLAN_87", "Recently joined users");
define("UCSLAN_88", "Identified search bots");
define("UCSLAN_89", "Checked classes are members of the group");
define("UCSLAN_90", "You can't edit certain system user classes!");
define("UCSLAN_91", "Class Structure");
//admin/help/
define("UCSLAN_92", "User Class Help");
define("UCSLAN_93", "You can select classes for editing, and also delete existing classes, from this page.");
define("UCSLAN_94", "Set the classes to which a new member of the site is assigned initially. 
	If you have verification enabled, this assignment may take place either when the user signs up, or when the user is verified.<br /><br />
	And remember that if you are using hierarchical user classes, a user is automatically a member of all classes 'above' each selected class in the tree");
define("UCSLAN_95", "The Setup options allow you to create and remove the default class hierarchy. You can see the effect by looking at the user tree.<br />
	This won't destroy your other class information, and you can modify or remove the hierarchy later.<br /><br />
	You should only need to rebuild the class hierarchy if database corruption occurs");
define("UCSLAN_96", "You can create classes, or edit existing classes from this page.<br />
         This is useful for restricting users to certain parts of your site. For example, you could create a class called TEST, 
		 then create a forum which only allowed users in the TEST class to access it.<br /><br />
		 The class name is displayed in drop-down lists and the like; in some places the more detailed description is also displayed.<br /><br />
		 The class icon may be displayed in various places on the site, if one is set.<br /><br />");//part1
define("UCSLAN_97", "To allow users to determine whether they can be a member of a class, allow them to manage it. If you set 'no-one' here, only the admins
		 can manage membership of the class<br /><br />
		 The 'visibility' field allows you to hide the class from most members - applies in some of the drop-down lists and checkboxes.<br /><br />
		 The 'class parent' allows you to set a hierarchy of classes. If the 'top' of the hierarchy is the 'Everybody/Public' or 'Member' classes, the 
		 classes lower down the hierarchy also have the rights of their parent class, and that classes' parent, and so on. If the 'top' of the hierarchy is
		 the 'No One/Nobody' class, then rights are accumulated in the opposite direction - a class accumlates all the rights of a class <b>below</b> them in the 
		 tree. The resulting tree is shown in the lower part of the page; you can expand and contract branches by clicking on the '+' and '-' boxes.");

//define("UCSLAN_UPDATE", "Update");//NOT USED ... LAN_UPDATE



