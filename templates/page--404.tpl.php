<?php kalypso_header($page);?>
        <div class="span10">
        
          <div class="row">
            <div class="span10">
              <div id="page_heading">
              <h2 class="page_heading_text"><?php print $title; ?></h2>
              <div id="breadcrumbs"><h3><?php if (theme_get_setting('breadcrumbs') == '1') {print $breadcrumb . $title; } ?></h3></div>
              </div>
            </div>
          </div> 
          
          <div class="row">
            <div id ="main_content_wrap" class="span10">
              <div id="main_content">
	              <div class="error_wrap">
		              <div class="error_img">
		                <img src="images/404.png" alt="404">
		              </div>
		             
		              <div class="error_text">
		                <h2>Page not found</h2>
		                <p>We're sorry, but the page you are looking for cannot be found. Try one of the following instead:</p>
		                <br>
		                <p><a class="btn btn-large" href="index.html"> Home</a> &nbsp;&nbsp;&nbsp;<a class="btn btn-large" href="contact.html"> Contact</a></p>
		              </div>    
		            </div>
                  </div>
                  <!--end error wrap-->
	            </div>
	          </div>
        
		      </div>
        </div>    
      </div>
    </div>  
  
<?php kalypso_footer($page);?>