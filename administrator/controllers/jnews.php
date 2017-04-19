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
class JNewsControllerJnews extends JControllerAdmin
{
	
	public function publish(){
		//echo "<br>function Publish()".JFactory::getApplication()->input->get('task');
		if(JFactory::getApplication()->input->get('task') == 'unpublish'){
			$this->unpublish();
			return;
		}
		$input = JFactory::getApplication()->input;
		
		$cid = $input->post->get('cid');
		//var_dump($cid);
		
		
		$model = $this->getModel();
		foreach ($cid as $id){
			$model->publishNews($id);
		}
		
		$this->setRedirect(JRoute::_('index.php?option=com_jnews', false), "done");
	}
	
	public function unpublish(){
		$input = JFactory::getApplication()->input;
		
		$cid = $input->post->get('cid');
		//var_dump($cid);
		
		$model = $this->getModel();
		foreach ($cid as $id){
			$model->unpublishNews($id);
		}
		
		$this->setRedirect(JRoute::_('index.php?option=com_jnews', false), "done");
	}
	
	public function delete(){
		$input = JFactory::getApplication()->input;
		
		$cid = $input->post->get('cid');		
		
		$model = $this->getModel();		
		
		foreach ($cid as $id){
			$model->deleteNews($id);
		}
		$this->setRedirect(JRoute::_('index.php?option=com_jnews', false), "done");
	
	}
	
	public function edit(){
		echo"<br>edit";
		$input = JFactory::getApplication()->input;
		
		$cid = $input->post->get('cid');	
		$this->setRedirect(JRoute::_('index.php?option=com_jnews&view=jnews&layout=edit&id='.$cid[0], false));
	}
	public function add(){
		echo"<br>function add";

		$this->setRedirect(JRoute::_('index.php?option=com_jnews&view=jnews&layout=edit', false));
		
	}
	public function save(){		
		
		$input = JFactory::getApplication()->input;
		
		$text = $input->post->get('news_text');	
		$model = $this->getModel();
		$model->addNews($text);
		$this->setRedirect(JRoute::_('index.php?option=com_jnews', false));
	}
	
}
