<?php
/**
* @package		JJ Fake Registered Users
* @author		JoomJunk
* @copyright	Copyright (C) 2011 - 2015 JoomJunk.
* @license		http://www.gnu.org/licenses/gpl-3.0.html
*/

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

// Include the syndicate functions only once
require_once (dirname(__FILE__).'/helper.php');

$displaytitle = JText::_($params->get('displaytitle', 'Registered Users:'));
$reguser      = $params->get('reguser', 1);
$increase     = $params->get('increase', 100);

$helper = new ModFakeDataHelper;
$users = $helper->getNumber($reguser, $increase);
require(JModuleHelper::getLayoutPath('mod_fake_registered_users'));
