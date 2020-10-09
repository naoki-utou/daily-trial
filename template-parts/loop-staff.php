<?php $cf_group = SCF::get('staff');
foreach ($cf_group as $field_name => $field_value) : ?>
	<li class="staff_item">
		<h3 class="staff_name">
			<?php echo $field_value['スタッフの役職']; ?><br>
			<span class="staff_name medium"><?php echo $field_value['スタッフの名前']; ?></span><br>
			<span class="staff_name minimum"><?php echo $field_value['スタッフの肩書き']; ?></span>
		</h3>
	</li>
<?php endforeach; ?>