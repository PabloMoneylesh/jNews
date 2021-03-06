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
class JNewsController extends JControllerForm
{
	
public function addNews($text){		
		 
		 $model = $this->getModel("JNews");
		 $result =$model->addNews($text);
		return $result;
	}
	
}
