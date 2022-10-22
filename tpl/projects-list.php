<?php for($i = 0; $i < count($attrs); $i++){ ?>
 <a href="<?php echo ['url']; ?>">
     <article class="navi-btn">
         <figure><img src="<?php echo $attrs[$i]['src']; ?>" alt="<?php echo $attrs[$i]['alt']; ?>"></figure>
     </article>
 </a>
<?php } ?>
