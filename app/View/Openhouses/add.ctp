<div class="openhouses form">
<?php echo $this->Form->create('Openhouse'); ?>
	<fieldset>
		<legend><?php echo __('Add Openhouse'); ?></legend>
	<?php
		echo $this->Form->input('when');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Openhouses'), array('action' => 'index')); ?></li>
	</ul>
</div>
