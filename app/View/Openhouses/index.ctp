<div class="container">
<div class="row">
<div class="col-md-6">
	<h1><?php echo __('Edit OH Schedule'); ?></h1>
	<?php echo $this->Form->create('Openhouse', array(
		'class'=> 'form-horizontal'
	)); ?>
		 <div class="form-group">
		<?php
			echo $this->Form->input('id');
			echo $this->Form->input('when', array(
				'class'=>'form-control',
			));
		?>
		</div>
		<?php echo $this->Form->submit('Save', array(
			'class'=>'btn btn-primary',
		)); ?>
	<?php echo $this->Form->end(); ?>
</div>
</div>
</div>