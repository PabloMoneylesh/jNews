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



// Get an instance of the controller prefixed by SLogin
$controller = JControllerForm::getInstance('JNews');


$input = JFactory::getApplication()->input;
echo "task=".$input->getCmd('task');
echo "<br>txt=".$input->getCmd('news_text');


$controller->execute($input->getCmd('task'));



