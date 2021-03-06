<?php

//****************************************************************************
// MainMenuLink v.1.0 | Xoops Module by Tank | July 2007
// Website: http://www.classyinternational.com
// 
//****************************************************************************

//  ------------------------------------------------------------------------ //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //

// admin header
include '../../../include/cp_header.php';
// if the site has no language defined, turn to English default
if ( file_exists("../language/".$xoopsConfig['language']."/main.php") ) {
include "../language/".$xoopsConfig['language']."/main.php"; } else { include "../language/english/main.php"; } // several includes
include '../include/functions.php';

$gperm_handler = & xoops_gethandler( 'groupperm' );
$groups = is_object($xoopsUser) ? $xoopsUser->getGroups() : XOOPS_GROUP_ANONYMOUS;
$isAdmin = $gperm_handler->checkRight( 'system_admin', XOOPS_SYSTEM_USER, $groups);
 
xoops_cp_header();

include 'var_lookup.php';

include 'admin_form.php';

xoops_cp_footer();
?>