<?php 
global $root, $base_url;
$share_url = $base_url.'/node/'.$node->nid;
?>


  <div class="span5 portfolio-item portfolio-item-first">
    <div class="view_portfolio_image"><a href="<?php print $node_url; ?>"><?php print render($content['field_portfolio_image']); ?></a></div>
    <div class="mask">
                  <h2><?php print $title; ?></h2>
                  <div class="portfolio_tags"><?php print render($content['field_portfolio_tags']); ?></div>
                  <a href="<?php print $node_url; ?>" class="info">Learn More</a>
                </div>
  </div>
  
