<?php for($i = 0; $i < count($attrs); $i++){ ?>
    <dl class="actionplan__list">
    <dt><?php echo $attrs[$i]['year']; ?></dt>
	<dd><?php echo $attrs[$i]['doc']; ?></dd>
	</dl>
<?php } ?>