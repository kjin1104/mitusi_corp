<?php for($i = 0; $i < count($attrs); $i++){ ?>
    <li><a href="<?php echo $attrs[$i]['src']; ?>"><?php echo $attrs[$i]['title']; ?></a></li>

    <dt>2016年7月～</dt>
	<dd>女性総合職交流会（はぴじょぶ）の継続</dd>

    <dt><?php echo $attrs[$i]['year']; ?></dt>
	<dd><?php echo $attrs[$i]['doc']; ?></dd>
<?php } ?>