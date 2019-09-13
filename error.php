<?php if (count($errors) > 0) : ?>
	<div class="error">
		<?php foreach ($errors as $error) : ?>
			<center><?php echo $error ?></center>
		<?php endforeach ?>
	</div>
<?php  endif ?>