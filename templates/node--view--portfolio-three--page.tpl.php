<?php 
global $root, $base_url;
$share_url = $base_url.'/node/'.$node->nid;
$count = '1';
?>


  <div class="span3 portfolio-item portfolio-item-first">
    <div class="view_portfolio_image"><a href="<?php print $node_url; ?>"><?php print render($content['field_portfolio_image']); ?></a></div>
    <div class="mask">
      <h2><?php print $title; ?> - Counter: <?php print $count; ?></h2>
      <div class="portfolio_tags"><?php print render($content['field_portfolio_tags']); ?></div>
      <a href="<?php print $node_url; ?>" class="info">Learn More</a>
    </div>
  </div>
  
