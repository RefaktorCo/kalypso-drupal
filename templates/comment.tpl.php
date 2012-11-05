<?php global $root;?>
<article class="<?php print $classes . ' ' . $zebra; ?>"<?php print $attributes; ?>>
  <div class="comment_avatar">
    <?php 
      if (!$picture) {
        echo '<img src="'.$root.'/images/anon.png">'; 
      }
      else { 
        print $picture;   
      }
    ?>
  </div>
  <div class="comment_content">  
    By <?php print $author; ?> on <?php print $created; ?> (<?php print $permalink; ?>):
    
    <?php if ($new): ?>
      <span class="new"><?php print $new ?></span>
    <?php endif; ?>
    
      <div class="content"<?php print $content_attributes; ?>>
        <?php hide($content['links']); print render($content); ?>
        <?php if ($signature): ?>
         <div class="user-signature clearfix">
           <?php print $signature ?>
        </div>
       <?php endif; ?>
      </div>

    <?php if (!empty($content['links'])) { print render($content['links']); } ?>
   </div>
   <div class="clearfix"></div>

</article> <!-- /.comment -->
