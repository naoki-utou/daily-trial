<?php $cf_group = SCF::get('comment');
foreach ($cf_group as $field_name => $field_value) : ?>
	<!-- comment_item -->
	<li class="comment_item">
		<h3 class="comment_item_name"><?php echo $field_value['キャストの名前']; ?></h3>
		<p class="comment_item_post"><?php echo $field_value['キャストの役職']; ?></p>
		<p class="comment_item_txt">
			<?php echo nl2br($field_value['キャストのコメント']); ?>
		</p>
	</li><!-- /.comment_item -->
<?php endforeach; ?>