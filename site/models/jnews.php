<?php

// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
class JNewsModelJNews extends JModelItem
{
	
	public function getNews()
	{
		
		$db		= JFactory::getDbo();
		$query	= $db->getQuery(true);

		$query->select(array('id, news, date'))
			->from('#__jnews')
			->where('published=1')
			->order('id ASC');
		$db->setQuery($query);
		$results = $db->loadObjectList();
		
		return $results;
	}
	
	public function addNews($text)
	{
		echo "addNews";
		
		$db		= JFactory::getDbo();
		$query	= $db->getQuery(true);
		
		$values = array($db->quote($text), 'CURDATE()');
		
		$query
		->insert($db->quoteName('#__jnews'))
		->columns('news, date')
		->values(implode(',', $values));
		
		
		$db->setQuery($query);
		$db->execute();
		
		return true;
	}
}