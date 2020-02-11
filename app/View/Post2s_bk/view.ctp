<div class="post2s view">
<h2><?php echo __('Post2'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($post2['Post2']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($post2['Post2']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Body'); ?></dt>
		<dd>
			<?php echo h($post2['Post2']['body']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($post2['Post2']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($post2['Post2']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Post2'), array('action' => 'edit', $post2['Post2']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Post2'), array('action' => 'delete', $post2['Post2']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $post2['Post2']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Post2s'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post2'), array('action' => 'add')); ?> </li>
	</ul>
</div>
