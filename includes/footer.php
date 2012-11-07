<?php 
function kalypso_footer($page){
  global $root; 
?>

<!-- begin footer -->        
    <div id="footer"> 
      <div class="container">
        <div class="row">
          <div class="span3">
            <div class="footer_icons">
              <ul>
              <?php if (theme_get_setting('twitter_icon') == '1' ): ?><li><a href="<?php echo theme_get_setting('twitter_url'); ?>" target="_blank"><img class="social_icons" src="<?php echo $root;?>/images/social/twitter-black.png"></a></li><?php endif ?>
             <?php if (theme_get_setting('facebook_icon') == '1' ): ?><li><a href="<?php echo theme_get_setting('facebook_url'); ?>" target="_blank"><img class="social_icons" src="<?php echo $root;?>/images/social/facebook-black.png"></a></li><?php endif ?>
               <?php if (theme_get_setting('google_plus_icon') == '1' ): ?><li><a href="<?php echo theme_get_setting('google_plus_url'); ?>" target="_blank"><img class="social_icons" src="<?php echo $root;?>/images/social/gplus-black.png"></a></li><?php endif ?>
               <?php if (theme_get_setting('pinterest_icon') == '1' ): ?><li><a href="<?php echo theme_get_setting('pinterest_url'); ?>" target="_blank"><img class="social_icons" src="<?php echo $root;?>/images/social/pinterest-black.png"></a></li><?php endif ?>
               <?php if (theme_get_setting('linkedin_icon') == '1' ): ?><li><a href="<?php echo theme_get_setting('linkedin_url'); ?>" target="_blank"><img class="social_icons" src="<?php echo $root;?>/images/social/linkedin-black.png"></a></li><?php endif ?>
             <?php if (theme_get_setting('flickr_icon') == '1' ): ?><li><a href="<?php echo theme_get_setting('flickr_url'); ?>" target="_blank"><img class="social_icons" src="<?php echo $root;?>/images/social/flickr-black.png"></a></li><?php endif ?>
             <?php if (theme_get_setting('youtube_icon') == '1' ): ?><li><a href="<?php echo theme_get_setting('youtube_url'); ?>" target="_blank"><img class="social_icons" src="<?php echo $root;?>/images/social/youtube-black.png"></a></li><?php endif ?>
             <?php if (theme_get_setting('rss_icon') == '1' ): ?><li><a href="<?php echo theme_get_setting('rss_url'); ?>" target="_blank"><img class="social_icons" src="<?php echo $root;?>/images/social/rss-black.png"></a></li><?php endif ?>
            </ul>  
            </div>
          </div> 
      
          
          <div class="span2">
            <span> <i class="icon-envelope icon-white"></i>&nbsp;&nbsp;info@loremipsum.com</span>
          </div>
          <div class="span2">
            <span> <i class="icon-briefcase icon-white"></i>&nbsp;&nbsp;1-888-888-8888</span>
          </div>
          <div class="span5">
            <ul id="footer_menu">
              <li> <a href="index.html">Home</a></li>
              <li> <a href="#">Sliders</a></li>
              <li> <a href="#">Features</a></li>
              <li> <a href="blog.html">Blog</a></li>
              <li> <a href="portfolio.html">Portfolio</a></li>
              <li> <a href="contact.html">Contact</a></li>
            </ul>    
          </div>
        </div>  
       
        <div class="row">
          <div class="span12">     
            <hr>
            <h6 class="after_footer">Design by <a href="http://refaktor.co" target="_blank">Refaktor</a></h6>
          </div> 
        </div>
      </div> 
    </div>
    <!-- end footer --> 
  </body>
</html>

<?php }
?>