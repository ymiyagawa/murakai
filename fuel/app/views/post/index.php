<h2>Listing Posts</h2>
<br>
<?php if ($posts): ?>
<table class="zebra-striped">
	<thead>
		<tr>
			<th>Title</th>
			<th>Summary</th>
			<th>Body</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($posts as $post): ?>		<tr>

			<td><?php echo $post->title; ?></td>
			<td><?php echo $post->summary; ?></td>
			<td><?php echo $post->body; ?></td>
			<td>
				<?php echo Html::anchor('post/view/'.$post->id, 'View'); ?> |
				<?php echo Html::anchor('post/edit/'.$post->id, 'Edit'); ?> |
				<?php echo Html::anchor('post/delete/'.$post->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Posts.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('post/create', 'Add new Post', array('class' => 'btn success')); ?>

</p>
