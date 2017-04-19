<?php

// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
class JNewsModelJNews extends JModelList
{
	
	public function getNews()
	{
		
		$db		= JFactory::getDbo();
		$query	= $db->getQuery(true);

		$query->select(array('id, news, date, published'))
			->from('#__jnews')
			
			->order('id ASC');
		$db->setQuery($query);
		$results = $db->loadObjectList();
		
		return $results;
	}
	
	public function getOneNews($id)
	{
		
		$db		= JFactory::getDbo();
		$query	= $db->getQuery(true);

		$query->select(array('id, news, date, published'))
			->from('#__jnews')
			->where($db->quoteName('id')."=".$id);
		$db->setQuery($query);
		$results = $db->loadObject();
		
		return $results;
	}
	
	public function addNews($text)
	{
		
		
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
	
	public function updateNews($id, $text)
	{
		
		
		$db		= JFactory::getDbo();
		$query	= $db->getQuery(true);
		
		$query
		->update($db->quoteName('#__jnews'))
		->set('news='.$db->quote($text))
		->where($db->quoteName('id')."=".$id);
		
		
		$db->setQuery($query);
		$db->execute();
		
		return true;
	}
	
	
	function deleteNews($id){
		$db		= JFactory::getDbo();
		$query	= $db->getQuery(true);
		
		$query
		->delete($db->quoteName('#__jnews'))		
		->where($db->quoteName('id')."=".$id);
		
		
		$db->setQuery($query);
		$db->execute();
	}
	
	public function publishNews($id)
	{
		$this->updatePublishState($id,1);
		
	}
	public function unpublishNews($id)
	{		
		$this->updatePublishState($id,0);
		
	}
	
	function updatePublishState($id, $state){
		
		$db		= JFactory::getDbo();
		$query	= $db->getQuery(true);
		
		$values = array($db->quote($text), 'CURDATE()');
		
		$query
		->update($db->quoteName('#__jnews'))
		->set('published='.$state)
		->where($db->quoteName('id')."=".$id);
		
		
		$db->setQuery($query);
		$db->execute();
		
		
		
		
		return true;
	}
	
	
}