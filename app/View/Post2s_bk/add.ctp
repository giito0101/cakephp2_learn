<div class="post2s form">
<?php echo $this->Form->create('Post2'); ?>
	<fieldset>
		<legend><?php echo __('Add Post2'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('body');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Post2s'), array('action' => 'index')); ?></li>
	</ul>
</div>
