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
$model = $this->getModel();
$news = $model->getOneNews($id);

?>
<form method="post" action="<?php echo JUri::getInstance(); ?>" >
			
	<input type="submit" name="submit_vote" value="Add news" />
	<input type="hidden" name="task" value="jnews.save" />
	<?php echo JHtml::_('form.token'); ?>				
	<textarea  id="news_text" name="news_text" style="height: 100px; width: 90%;" placeholder=""><?php echo $news->news; ?></textarea>
			
				
</form>
