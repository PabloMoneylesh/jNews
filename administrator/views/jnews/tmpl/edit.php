<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_helloworld
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
 
// No direct access
defined('_JEXEC') or die('Restricted access');

$input = JFactory::getApplication()->input;
		
$id = $input->get('id');	
if(isset($id)){
	$model = $this->getModel();
	$news = $model->getOneNews($id);
}

?>
<form action="index.php?option=com_jnews" method="post" id="adminForm" name="adminForm">
	<input type="hidden" name="task" value="jnews.save" />
	<input type="hidden" name="id" value="<?php echo $id; ?>" />
	<?php echo JHtml::_('form.token'); ?>				
	<textarea  id="news_text" name="news_text" style="height: 100px; width: 90%;" placeholder=""><?php echo $news->news; ?></textarea>
			
				
</form>
