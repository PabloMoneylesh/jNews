<?php

// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
class JNewsViewJNews extends JViewLegacy
{
	/**
	 * Display the Hello World view
	 *
	 * @param   string  $tpl  The name of the template file to parse; automatically searches through the template paths.
	 *
	 * @return  void
	 */
	function display($tpl = null)
	{
		
		
		
		$this->news = $this->get('News');
		
		// Assign data to the view
	
		
		//echo "display=".$tpl;
		
		
		// Check for errors.
		if (count($errors = $this->get('Errors')))
		{
			JLog::add(implode('<br />', $errors), JLog::WARNING, 'jerror');
 
			return false;
		}
 
		$this->addToolBar();
		
		// Display the view
		parent::display($tpl);
	}
	
	protected function addToolBar()
	{		
	$input = JFactory::getApplication()->input;
	
	//var_dump($input );
	
		$layout =  $input->get('layout');
		$id = $this->get('id');
		
		
		if($layout !='edit'){	
			JToolbarHelper::addNew('jnews.add');
			JToolbarHelper::editList('jnews.edit');
			JToolbarHelper::publishList('jnews.publish');
			JToolBarHelper::unpublishList('jnews.unpublish');
			JToolbarHelper::deleteList('', 'jnews.delete');
		}
		else{
			
				JToolbarHelper::save('jnews.save');
				JToolbarHelper::cancel('jnews.cancel');
			
		}
		
	}
}