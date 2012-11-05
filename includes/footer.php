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
                <li><a href="http://twitter.com" target="_blank"><img class="social_icons" src="<?php echo $root;?>/images/social/twitter-black.png" alt="twitter"></a></li>             				
                <li><a href="http://facebook.com" target="_blank"><img class="social_icons" src="<?php echo $root;?>/images/social/facebook-black.png" alt="facebook"></a></li>               			    
                <li><a href="http://plus.google.com" target="_blank"><img class="social_icons" src="<?php echo $root;?>/images/social/gplus-black.png" alt="gplus"></a></li>
                <li><a href="http://linkedin.com" target="_blank"><img class="social_icons" src="<?php echo $root;?>/images/social/linkedin-black.png" alt="linkedin"></a></li>
                <li><a href="http://youtube.com" target="_blank"><img class="social_icons" src="<?php echo $root;?>/images/social/youtube-black.png" alt="youtube"></a></li>
                <li><a href="#" target="_blank"><img class="social_icons" src="<?php echo $root;?>/images/social/rss-black.png" alt="rss"></a></li>
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