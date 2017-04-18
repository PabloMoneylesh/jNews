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
<form action="index.php?option=com_helloworld&view=helloworlds" method="post" id="adminForm" name="adminForm">
	<table class="table table-striped table-hover">
		<thead>
		<tr>
			<th width="5%">Id</th>
			
			<th width="60%">
				Text
			</th>
			<th width="5%">
				Date
			</th>
			<th width="2%">
				Publiched
			</th>
		</tr>
		</thead>
		<tfoot>
			<tr>
				<td colspan="5">
					
				</td>
			</tr>
		</tfoot>
		<tbody>
		<?php foreach ($this->news as $i=>$item) : ?>
		<tr>
			<th width="5%"><?php echo $item->id; ?></th>
			
			<th width="60%">
				<?php echo $item->news; ?>
			</th>
			<th width="5%">
				<?php echo $item->date; ?>
			</th>
			<th width="2%">
			<?php echo $item->published; ?>
			</th>
		</tr>
		
	<?php endforeach; ?>	

		
		</tbody>
	</table>
	<input type="hidden" name="task" value=""/>
	<input type="hidden" name="boxchecked" value="0"/>
	<?php echo JHtml::_('form.token'); ?>
</form>



