<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_helloworld
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
 
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
?>
<h1>NEWS:</h1>
<?php foreach ($this->news as $item) : ?>
<p>
<?php echo $item->id; ?> - <?php echo $item->date; ?>
</p>

<h5>
<?php echo $item->news; ?>
</h5>


<?php endforeach; ?>

<form method="post" action="<?php echo JUri::getInstance(); ?>" >
			
	<input type="submit" name="submit_vote" value="Add news" />
	<input type="hidden" name="task" value="jnews.add" />
	<?php echo JHtml::_('form.token'); ?>				
	<textarea  id="news_text" name="news_text" style="height: 100px; width: 90%;" placeholder=""></textarea>
			
				
</form>
