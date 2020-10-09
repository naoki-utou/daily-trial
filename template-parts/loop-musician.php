<?php $cf_group = SCF::get('musician');
foreach ($cf_group as $filed_name => $field_value) : ?>
	<!-- musician_item -->
	<li class="musician_item">
		<!-- musician_img -->
		<div class="musician_img">
			<?php echo wp_get_attachment_image($field_value['ミュージシャンの写真']); ?>
		</div><!-- /.musician_img -->

		<div class="musician_item_body">
			<!-- musician_name -->
			<h3 class="musician_name">
				<?php echo $field_value['ミュージシャンの役職'] ?><br>
				<span class="musician_name medium"><?php echo $field_value['ミュージシャンの名前']; ?></span><br>
				<span class="musician_name minimum"><?php echo $field_value['ミュージシャンの肩書き']; ?></span>
			</h3><!-- /.musician_name -->
							
			<!-- musician_txt -->
			<p class="musician_txt">
				<?php echo nl2br($field_value['ミュージシャンのプロフィール']); ?>
			</p><!-- /.musician_txt -->
		</div>
	</li><!-- /.musician_item -->
<?php endforeach; ?>