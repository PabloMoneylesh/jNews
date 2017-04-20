<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_content
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;


/**
 * Content Component Controller
 *
 * @since  1.5
 */
class JNewsControllerJNews extends JControllerForm
{
	
	public function add(){		
	
	$input = JFactory::getApplication()->input;
		
	$text =  $this->input->getString('news_text');

	$model = $this->getModel("JNews");
	$result =$model->addNews($text);
	$this->setRedirect(JRoute::_('index.php?option=com_jnews', false), "Yor message will by displayed after validation by administration");
		
	}
}
