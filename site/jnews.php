<?php
/**
 * JComments - Joomla Comment System
 *
 * @version 3.0
 * @package JComments
 * @author Sergey M. Litvinov (smart@joomlatune.ru)
 * @copyright (C) 2006-2013 by Sergey M. Litvinov (http://www.joomlatune.ru)
 * @license GNU/GPL: http://www.gnu.org/copyleft/gpl.html
 */

defined('_JEXEC') or die;

// Require the com_content helper library
require_once(JPATH_COMPONENT.'/controller.php');

$controller = JControllerForm::getInstance('JNews');

$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();



