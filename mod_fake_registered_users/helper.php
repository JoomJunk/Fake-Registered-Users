<?php
/**
* @package		JJ Fake Registered Users
* @author		JoomJunk
* @copyright	Copyright (C) 2011 - 2015 JoomJunk.
* @license		http://www.gnu.org/licenses/gpl-3.0.html
*/

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

class ModFakeDataHelper
{
	public function getList($params)
	{
		$db = JFactory::getDBO();
		$query = $db->getQuery(true);
		$query->select('COUNT(id) AS count_users');
		$query->from($db->quoteName('#__users'));
		$db->setQuery($query);
		$members = $db->loadResult();

		$rows = array();

		$reguser 	= $params->get('reguser');
		$increase 	= $params->get('increase');

		$i = 0;

		if ($reguser)
		{
			if ($members)
			{
				$rows[$i]        = new stdClass;
				$rows[$i]->title = JText::_($params->get('displaytitle'));
				$rows[$i]->data  = $members + $increase;
				$i++;
			}
			else
			{
				echo '';
			}
		}
		else
		{
			if ($members)
			{
				$rows[$i]        = new stdClass;
				$rows[$i]->title = JText::_( $params->get( 'displaytitle' ) );
				$rows[$i]->data  = $members;
				$i++;
			}
			else
			{
				echo '';
			}
		}

		return $rows;
	}
}
