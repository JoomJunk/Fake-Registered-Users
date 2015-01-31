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
	/**
	 * Gets the number of users with the given parameters
	 *
	 */
	public function getNumber($displayFake, $increaseAmount)
	{
		$db = JFactory::getDbo();
		$query = $db->getQuery(true);
		$query->select('COUNT(id) AS count_users');
		$query->from($db->quoteName('#__users'));
		$db->setQuery($query);

		// TODO: Check for a database error
		$members = $db->loadResult();

		// Initialise the number of users to return
		$number = 0;

		// If we have users returned then the number of users is that number
		if ($members)
		{
			$number = $members;
		}

		// If we need to display a faked amount add the number to increase on
		if ($displayFake)
		{
			$number += $increaseAmount;
		}

		return $number;
	}
}
