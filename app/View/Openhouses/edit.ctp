<div class="openhouses form">
<?php echo $this->Form->create('Openhouse'); ?>
	<fieldset>
		<legend><?php echo __('Edit Openhouse'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('when');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Openhouse.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Openhouse.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Openhouses'), array('action' => 'index')); ?></li>
	</ul>
</div>
