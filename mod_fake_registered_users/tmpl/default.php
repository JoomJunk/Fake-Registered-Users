<?php 
/**
* @package		JJ Fake Registered Users
* @author		JoomJunk
* @copyright	Copyright (C) 2011 - 2012 JoomJunk.
* @license		http://www.gnu.org/licenses/gpl-3.0.html
*/

// no direct access
defined('_JEXEC') or die('Restricted access'); ?>
<?php foreach ($list as $item) : ?>
<strong><?php echo $item->title ?></strong>  <?php echo $item->data ?><br />
<?php endforeach; ?>