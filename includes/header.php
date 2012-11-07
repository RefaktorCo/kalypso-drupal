<?php 
function kalypso_header($page){
  global $root; 
?>

    <div class="container">
      <div class="row">  
        <div class="span2"> 
          <div id="vert_nav">
          <header>
          <?php if (theme_get_setting('branding_type') == 'logo'): ?>
          <div id="main_title">
            <a href="<?php print base_path();?>"><img src="<?php print file_create_url(theme_get_setting('bg_path')); ?>" /></a>
          </div>
          <?php endif; ?>
          
          <?php if (theme_get_setting('branding_type') == 'text'): ?>
            <a href="<?php print base_path();?>">
            <div id="main_title">
              <h1 id="main_title_text"><?php print variable_get('site_name'); ?></h1>
            </div>
            </a>
          <?php endif; ?>
            <!-- begin menu -->
            <div id="menu" class="row">
	          	<div id="main-menu" class="navigation">
		          	<div id="menu_wrap">
				          <?php print theme('links__system_main_menu', array(
				            'attributes' => array(
				              'id' => 'main-menu-links',
				              'class' => array('links', 'clearfix'),
				            ),
				            'heading' => array(
				              'text' => t('Main menu'),
				              'level' => 'h2',
				              'class' => array('element-invisible'),
				            ),
				          )); 
				          ?>
				        </div>
				      </div> 
      
				    </div> 
            <!-- end menu -->   
                
            </header> 
          </div> 
        </div>
        <!-- end main span2 -->  
        
         <div id="slideout">
	      <div id="slidecontent">
	      <h6 class="switch_heading">COLORS</h6>
		    <ul id="color-nav">
		      <li class="<?php echo $root;?>/css/colors/default.css"><img src="<?php echo $root;?>/images/switch/blue.png" alt="switch"></li>
		      <li class="<?php echo $root;?>/css/colors/black.css"><img src="<?php echo $root;?>/images/switch/black.png" alt="switch"></li>
		      <li class="<?php echo $root;?>/css/colors/green.css"><img src="<?php echo $root;?>/images/switch/green.png" alt="switch"></li>
		      <li class="<?php echo $root;?>/css/colors/orange.css"><img src="<?php echo $root;?>/images/switch/orange.png" alt="switch"></li>
		      <li class="<?php echo $root;?>/css/colors/red.css"><img src="<?php echo $root;?>/images/switch/red.png" alt="switch"></li>
		      <li class="<?php echo $root;?>/css/colors/dark-blue.css"><img src="<?php echo $root;?>/images/switch/dark-blue.png" alt="switch"></li>
		      <li class="<?php echo $root;?>/css/colors/dark-grey.css"><img src="<?php echo $root;?>/images/switch/dark-grey.png" alt="switch"></li>
		      <li class="<?php echo $root;?>/css/colors/purple.css"><img src="<?php echo $root;?>/images/switch/purple.png" alt="switch"></li>
		      <li class="<?php echo $root;?>/css/colors/light-grey.css"><img src="<?php echo $root;?>/images/switch/light-grey.png" alt="switch"></li>
		      <li class="<?php echo $root;?>/css/colors/yellow.css"><img src="<?php echo $root;?>/images/switch/yellow.png" alt="switch"></li>
		    </ul>
		    <h6 class="switch_heading">BACKGROUNDS</h6>
		    <ul id="bg-nav">
		      <li class="grey-bg"><img src="<?php echo $root;?>/images/switch/grey-bg.png" alt="switch"></li>
		      <li class="grid-bg"><img src="<?php echo $root;?>/images/switch/grid-bg.png" alt="switch"></li>
		      <li class="cream-bg"><img src="<?php echo $root;?>/images/switch/cream-bg.png" alt="switch"></li>
		      <li class="gplay-bg"><img src="<?php echo $root;?>/images/switch/gplay-bg.png" alt="switch"></li>
		      </ul>
	      </div>
      
	      <div id="clickme">
	       <img src="<?php echo $root;?>/images/switch/edit.png" alt="switch">
	      </div>
      
        </div>

  
<script type="text/javascript">
jQuery(document).ready(function ($) {
	
      $().UItoTop({ easingType: 'easeOutQuart' });
    
      $('ul.menu').superfish();
    
      $('ul#quotes').quote_rotator();
    
      $('#menu').mobileMenu();
      
      $("#google_map").fitMaps( {w: '100%', h:'370px'} ); 
     
      jQuery("ul.accordion li").each(function(){
        if(jQuery(this).index() > 0){
	      jQuery(this).children(".accordion-content").css('display','none');
        }
        else{
	      jQuery(this).find(".accordion-head-image").addClass('active');
        }

        jQuery(this).children(".accordion-head").bind("click", function(){
	      jQuery(this).children().addClass(function(){
		    if(jQuery(this).hasClass("active")) return "";
		      return "active";
	      });
	      jQuery(this).siblings(".accordion-content").slideDown();
	      jQuery(this).parent().siblings("li").children(".accordion-content").slideUp();
	      jQuery(this).parent().siblings("li").find(".active").removeClass("active");
        });
      });
    });
    
    jQuery(document).ready(function ($) {
      $("#color-nav li a").click(function() { 
        $("link.switch").attr("href",$(this).attr('rel'));
      });
    });

	jQuery(document).ready(function ($) {
	  $('#slideout').hover(function() {
	    $(this).animate({left:'0px'}, {queue:false, duration: 500});
	  }, 
	  function() {
	    $(this).animate({left:'-115px'}, {queue:false, duration: 500});
	  });
	}); 
	
	jQuery(document).ready(function ($) {
      $("#color-nav li").click(function() { 
        $("link.switch").attr("href",$(this).attr('class'));
      });
      
      $(".grey-bg").click(function() {
        $('body').css("background-image", "url(http://refaktor.co/kalypso-html/images/backgrounds/grey.png)");
      });
      
      $(".grid-bg").click(function() {
        $('body').css("background-image", "url(http://refaktor.co/kalypso-html/images/backgrounds/noisy_grid.png)");
      });
      
      $(".cream-bg").click(function() {
        $('body').css("background-image", "url(http://refaktor.co/kalypso-html/images/backgrounds/cream_dust.png)");
      });
      
      $(".gplay-bg").click(function() {
        $('body').css("background-image", "url(http://refaktor.co/kalypso-html/images/backgrounds/gplaypattern.png)");
      });

      
    });

	jQuery(document).ready(function ($) {
	  $('#slideout').hover(function() {
	    $(this).animate({left:'0px'}, {queue:false, duration: 500});
	  }, 
	  function() {
	    $(this).animate({left:'-115px'}, {queue:false, duration: 500});
	  });
	});


</script>
<?php }
?>