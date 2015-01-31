<?php
/**
* @package		JJ Fake Registered Users
* @author		JoomJunk
* @copyright	Copyright (C) 2011 - 2012 JoomJunk.
* @license		http://www.gnu.org/licenses/gpl-3.0.html
*/

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

// Include the syndicate functions only once
require_once (dirname(__FILE__).'/helper.php');

$reguser = $params->get( 'reguser' );
$displaytitle = $params->get( 'displaytitle' );

$list = ModFakeDataHelper::getList($params);
require(JModuleHelper::getLayoutPath('mod_fake_registered_users'));
