<?php for($i = 0; $i < count($attrs); $i++){ ?>
    <li><a href="<?php echo $attrs[$i]['src']; ?>"><?php echo $attrs[$i]['title']; ?></a></li>
<?php } ?>