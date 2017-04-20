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

//$controller = new JNewsController();
$controller = JControllerForm::getInstance('JNews');

$input = JFactory::getApplication()->input;
		
		

// Perform the Request task

$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();

echo "<br/><div align='center'><i>JNEWS</i></div>";

