<?php kalypso_header($page); global $root; ?>

      <!-- main span10 -->
	    <div class="span10">
	      
	      <?php if (theme_get_setting('enable_highlight') == '1') { ?>
	      <div class="row">
	        <div class="span10">
	          <div id="page_heading">
	          <h2 class="page_heading_text"><?php echo theme_get_setting('highlight_text'); ?></h2>
	          </div>
	        </div>
	      </div> 
	      <?php } ?>
	
	      <?php 
	        
	        if (theme_get_setting('enable_slider') == '1' && theme_get_setting('slider_type') == 'default' ) {
	      	  kalypso_elastic_image_slider($page); 
	      	} 
	      	
	      	if (theme_get_setting('enable_slider') == '1' && theme_get_setting('slider_type') == 'nivo' ) {
	      	  kalypso_nivo_slider($page); 
	      	} 
	      	
	      	elseif (theme_get_setting('enable_slider') == '1' && theme_get_setting('slider_type') == 'bootstrap' ) {
	      	  kalypso_bootstrap_slider($page); 
	      	} 
	      	
	      ?>
	      
	      <?php print render($page['slider']); ?> 
	      
	      <?php if (theme_get_setting('enable_panels') == '1') { ?>
	      <div class="row">
	        <div class="span10">
	          <div class="section_title"><span class="section_title_text"><?php echo theme_get_setting('panels_title'); ?></span></div>
	        </div> 
	      </div>
	    
	      <div class="row">
	        <div id="panels"> 
	          
	          <div class="span3">
	          	<div class="panel_wrap">
	              <?php print render($page['panel_1']); ?> 
	            </div>
	          </div>
	    
	        <div class="span3">
	          <div class="panel_wrap">
	            <?php print render($page['panel_2']); ?> 
	          </div>
	        </div>
	    
	        <div class="span3">
	        	<div class="panel_wrap">
	        	  <?php print render($page['panel_3']); ?>  
	          </div>
	        </div>
	        
	      </div>
	    </div>
	    <!-- end panels --> 
	    
	    <?php if($page['panel_full']) {?>
	    <div class="row">
	        <div id="panels"> 
	          <?php print render($page['panel_full']); ?>
	        </div>
	    </div>
	    <?php } } ?>
	    
	
	     <?php if (theme_get_setting('enable_portfolio') == '1') { ?>
	     <div class="row">
	        <div class="span10">
	          <div class="section_title"><span class="section_title_text"><?php echo theme_get_setting('portfolio_title'); ?></span></div>
	        </div> 
	      </div>   
	     
	      <div id="portfolio">
	        <div class="row">
	          <?php print render($page['portfolio']); ?>  
	        </div>
	      </div>
	      <!-- end portfolio --> 
	      <?php } ?>
	
	      <?php if (theme_get_setting('enable_contact') == '1') { ?>
	      <div class="row">
	        <div class="span10">
	          <div class="section_title"><span class="section_title_text"><?php echo theme_get_setting('contact_title'); ?></span></div>
	        </div>
	      </div>
	      
	      <?php if (theme_get_setting('enable_map') == '1') { ?>
	      <div class="row">
	        <div class="span10">
	          <div id="google_map">
	            <iframe width="1170" height="370" src="<?php echo theme_get_setting('map_address'); ?>"></iframe><br />      
	          </div>
	        </div>
	      </div>
	      <?php } ?>
	    
	      <div class="row">   
	        <div class="span4">
	          <?php print render($page['contact_1']); ?> 
	        </div> 
	      
	        <div class="span2">        
	        <?php print render($page['contact_2']); ?> 
	        </div>
	   
	        <div class="span4">
	          <?php print render($page['contact_3']); ?>  
	        </div>
	      </div>
	      
	      <?php if($page['contact_full']) {?>
	      <div class="row">
	        <div id="panels"> 
	          <?php print render($page['contact_full']); ?>
	        </div>
	      </div>
	      <?php } } ?>     
	    
	      <?php if (theme_get_setting('enable_clients') == '1') { ?>
	      <div class="row">
	        <div class="span10">
	          <div class="section_title"><span class="section_title_text"><?php echo theme_get_setting('clients_title'); ?></span></div>
	        </div>
	       </div>
	    
	      <div id="clients" class="row" >       
	        <?php print render($page['clients']); ?> 
	      </div>
	      
	      <?php } ?>
	      
	    </div>
	  </div>       
	</div>
	<!-- end main body container -->  

<?php kalypso_footer($page); // Call Footer ?>