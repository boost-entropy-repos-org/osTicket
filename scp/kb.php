<?php
/*********************************************************************
    kb.php

    Knowlegebase 

    Peter Rotich <peter@osticket.com>
    Copyright (c)  2006-2012 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/
require('staff.inc.php');
require_once(INCLUDE_DIR.'class.faq.php');
$category=null;
if($_REQUEST['cid'] && !($category=Category::lookup($_REQUEST['cid'])))
    $errors['err']='Unknown or invalid FAQ category';

$inc='kb-categories.inc.php'; //KB landing page.
if($category && $_REQUEST['a']!='search') {
    $inc='kb-category.inc.php';
}
$nav->setTabActive('kbase');
require_once(STAFFINC_DIR.'header.inc.php');
require_once(STAFFINC_DIR.$inc);
require_once(STAFFINC_DIR.'footer.inc.php');
?>
