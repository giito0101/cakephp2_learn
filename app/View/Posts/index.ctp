<!-- File: /app/View/Posts/index.ctp -->

<h1>Blog posts</h1>
<p><?php echo $this->Html->link(
    'Add Post',
    array('controller' => 'posts', 'action' => 'add'));
?></p>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Actions</th>
        <th>Created</th>
    </tr>

    <!-- ここから、$posts配列をループして、投稿記事の情報を表示 -->

    <?php foreach ($posts as $post): ?>
    <tr>
        <td><?php echo $post['Post']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($post['Post']['title'],
             array('action' => 'view', $post['Post']['id'])); ?>
        </td>
        <td>
            <?php echo $this->Form->postLink('Delete',
             array('action' => 'delete', $post['Post']['id']),
             array('confirm' => 'Are you sure?')); ?>
        </td>
        <td>
            <?php echo $this->Html->link($post['Post']['created'],
             array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])); ?>
        </td>
    </tr>
    <?php endforeach; ?>
    <?php unset($post); ?>
</table>