<?php if (count($error) > 0): ?>
	<div style="width: 92%; margin: 0px auto; padding: 10px; text-align: left;">
		<?php
		foreach ($error as $errors): 
		?>
		<p><?php echo $errors ?></p><br>;
<?php endforeach ?>
	</div>
<?php endif ?>

 