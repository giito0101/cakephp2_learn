<!-- File: /app/View/Posts/add/ctp -->

<h1>Add Post</h1>
<?php
echo $this->Form->create('Post');
echo $this->Form->input('title', array('required' => false));
echo $this->Form->input('body', array('rows' => '3', 'required' => false));
echo $this->Form->end('Save Post');