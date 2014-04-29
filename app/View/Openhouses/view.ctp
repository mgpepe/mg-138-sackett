<div class="openhouses view">
<h2><?php echo __('Openhouse'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($openhouse['Openhouse']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('When'); ?></dt>
		<dd>
			<?php echo h($openhouse['Openhouse']['when']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Openhouse'), array('action' => 'edit', $openhouse['Openhouse']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Openhouse'), array('action' => 'delete', $openhouse['Openhouse']['id']), null, __('Are you sure you want to delete # %s?', $openhouse['Openhouse']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Openhouses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Openhouse'), array('action' => 'add')); ?> </li>
	</ul>
</div>
