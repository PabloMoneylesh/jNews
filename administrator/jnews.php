<?php
/**
 * @package		AdsManager
 * @copyright	Copyright (C) 2010-2014 Juloa.com. All rights reserved.
 * @license		GNU/GPL
 */

// no direct access
defined('_JEXEC') or die('Restricted access');


// Make sure the user is authorized to view this page
$user = JFactory::getUser();


// Component Helper
jimport('joomla.application.component.helper');
require_once( JPATH_COMPONENT."/controller.php" );

$controller = new JNewsController();

// Perform the Request task
$controller->execute(JRequest::getCmd('task', null));
$controller->redirect();

echo "<br/><div align='center'><i>JNEWS</i></div>";

