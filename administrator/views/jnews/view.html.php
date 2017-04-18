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
		// Assign data to the view
		$this->news = $this->get('News');
		
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
		JToolbarHelper::title("Some text");
		JToolbarHelper::addNew('jnews.add');
		JToolbarHelper::editList('jnews.edit');
		JToolbarHelper::deleteList('', 'jnews.delete');
	}
}