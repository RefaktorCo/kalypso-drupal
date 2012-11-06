
        <div class="span10">
        
          <div class="row">
            <div class="span10">
              <div id="page_heading">
              <h2 class="page_heading_text"><?php print $title; ?><?php if (theme_get_setting('breadcrumbs') == '1') {print $breadcrumb . $title; } ?></h2>
              </div>
            </div>
          </div> 
          
          <div class="row">
            <div id ="main_content_wrap" class="<?php if (theme_get_setting('page_layout') == 'sidebar_right') { echo "span6"; } else { echo "span10"; } ?>">
              <div id="main_content">
	              <?php print render($title_prefix); ?>
	              <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
	              <?php print render($title_suffix); ?>
	              <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
	              <?php print render($page['content']); ?>
	            </div>
	          </div>
        
		        <?php if (theme_get_setting('page_layout') == 'sidebar_right'): ?>
		        <div id="sidebar_wrap">
		          <div class="span4">
		          	<?php if ($page['sidebar_first']): ?>
		          	<aside id="sidebar-first" role="complementary" class="sidebar clearfix">
		            <?php print render($page['sidebar_first']); ?>
		            </aside>  <!-- /#sidebar-first -->
		            <?php endif; ?>
		            <?php if ($page['sidebar_second']): ?>
		            <aside id="sidebar-second" role="complementary" class="sidebar clearfix">
			          <?php print render($page['sidebar_second']); ?>
			          </aside>  <!-- /#sidebar-first -->
			          <?php endif; ?>
		          </div>        
		        </div>
		        <?php endif; ?>
		      </div>
        </div>    
      </div>
    </div>  
  
