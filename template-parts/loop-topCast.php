
<?php $cf_group = SCF::get('cast');
foreach ($cf_group as $field_name => $field_value) : ?>
	<!-- template_topCast_item -->
	<li class="template_topCast_item">
		<!-- template_topCast_img -->
		<div class="template_topCast_img">
			<?php echo wp_get_attachment_image($field_value['キャストの写真']); ?>
		</div><!-- /.template_topCast_img -->

		<!-- template_topCast_name -->
		<h3 class="template_topCast_name">
			<?php echo $field_value['キャストの役職']; ?><br>
			<span class="template_topCast_name medium"><?php echo $field_value['キャストの名前']; ?></span><br>
			<span class="template_topCast_name minimum"><?php echo $field_value['キャストの肩書き']; ?></span>
		</h3><!-- /.template_topCast_name -->

		<!-- template_topCast_txt -->
		<p class="template_topCast_txt">
			<?php echo nl2br($field_value['キャストのプロフィール']); ?>
		</p><!-- /.template_topCast_txt -->
	</li><!-- /.template_topCast_item -->
<?php endforeach; ?>