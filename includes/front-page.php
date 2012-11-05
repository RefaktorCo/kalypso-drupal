<?php 
function kalypso_front_page($page){
  global $root; 
?>

<!-- main span10 -->
        <div class="span10">
          
          <div class="row">
            <div class="span10">
              <div id="page_heading">
              <h2 class="page_heading_text">This is <span class="standout_text">Kalypso</span> a modern HTML template.<br> Turn your website into something beautiful.</h2>
              </div>
            </div>
          </div>  
          
          <div class="row">
            <div class="span10">
              <div id="ei-slider" class="ei-slider">
                <ul class="ei-slider-large">
	         
	              <li>
	                <img src="<?php echo $root;?>/images/slider_1.jpg" alt="slider" />
	                <div class="ei-title">
	                  <h2>Think</h2>
	                  <h3>Global</h3>
	                </div>
	              </li>
	          
		           <li>
	                <a href="#"><img src="<?php echo $root;?>/images/slider_2.jpg" alt="slider"/></a>
	                <div class="ei-title">
	                  <h2>Creative</h2>
	                  <h3>Control</h3>
	                </div>
	              </li>
	              
	              <li> 
	                <img src="<?php echo $root;?>/images/slider_3.jpg" alt="slider" />
	                <div class="ei-title">
	                  <h2>CLean</h2>
	                  <h3>Design</h3>
	                </div>
	              </li>
	              
		          <li>
		            <img src="<?php echo $root;?>/images/slider_4.jpg" alt="slider" />
		            <div class="ei-title">
		              <h2>SEO</h2>
		              <h3>Friendly</h3>
		            </div>
		          </li> 
		          
                </ul>
	            <!-- ei-slider-large -->
	            <ul class="ei-slider-thumbs">
	              <li class="ei-slider-element">Current</li>
		          <li><a href="#">Slide 1</a><img src="<?php echo $root;?>/images/thumbs/thumb_1.jpg" alt="thumb01" /></li>
		          <li><a href="#">Slide 2</a><img src="<?php echo $root;?>/images/thumbs/thumb_2.jpg" alt="thumb02" /></li>
		          <li><a href="#">Slide 3</a><img src="<?php echo $root;?>/images/thumbs/thumb_3.jpg" alt="thumb03" /></li>
		          <li><a href="#">Slide 4</a><img src="<?php echo $root;?>/images/thumbs/thumb_4.jpg" alt="thumb04" /></li>
		        </ul>
		        <!-- ei-slider-thumbs -->
	          </div>
	          <!-- ei-slider -->
            </div>
          </div>
   
          <div class="row">
            <div class="span10">
              <div class="section_title"><span class="section_title_text">WHAT WE DO</span></div>
            </div> 
          </div>
        
          <div class="row">
            <div id="panels"> 
              
              <div class="span3">
	            <div class="panel_wrap">
	              <a href="#"><div class="panel_icon"><img src="<?php echo $root;?>/images/monitor.png" alt="color"></div></a>
	              <h3 class="panel_title">Design & Branding</h3>
	              <div class="panel_text">
	                <p>Engage your audience. Define your identity.</p>
	              </div>  
	            </div>
	          </div>
	      
	          <div class="span3">
		        <div class="panel_wrap">
		          <a href="#"><div class="panel_icon"><img src="<?php echo $root;?>/images/phone.png" alt="color"></div></a>
		          <h3 class="panel_title">Global Solutions</h3>
		          <div class="panel_text">
		            <p>Know no boundires. Expand your horizons.</p>	             
		          </div>  
		        </div>
		      </div>
        
	          <div class="span3">
		        <div class="panel_wrap">
		          <a href="#"><div class="panel_icon"><img src="<?php echo $root;?>/images/file3.png" alt="color"></div></a>
		          <h3 class="panel_title">Customer Service</h3>
		          <div class="panel_text">
		            <p>Phone, email, live-chat. We've got you covered.</p>           
		          </div>  
		        </div>
		      </div>
            </div>
          </div>
         <!-- end panels --> 
       
         <div class="row">
            <div class="span10">
              <div class="section_title"><span class="section_title_text">RECENT WORK</span></div>
            </div> 
          </div>   
         
          <div id="portfolio">
            <div class="row">

              <div class="span4 ">
                <h3 class="portfolio_cool_stuff">Cool stuff we've done</h3>
               <p> Nulla in mauris turpis, sed venenatis odio. Duis porta orci at justo faucibus mattis. Nullam in lectus justo. Sed molestie libero ac turpis commodo non ullamcorper leo iaculis. <br><br> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vivamus eget quam magna. Fusce pellentesque ullamcorper ipsum, egestas egestas nibh ultrices vehicula. Suspendisse potenti..</p><br />
                <button class="btn btn-large" type="button">Our Portfolio</button> 
              </div>              
       
              <div class="span5 view view-first">
                <a href="portfolio-single.html"><img src="<?php echo $root;?>/images/portfolio_2.jpg" alt="portfolio2"></a>
                <div class="mask">
                  <h2>Eiusmod Tempor</h2>
                  <p>research, consultation, human resources.</p>
                  <a href="portfolio-single.html" class="info">Learn More</a>
                </div>
              </div>  
            </div>
        
            <div class="row">

              <div class="span3 view view-first">
                <a href="portfolio-single.html"><img src="<?php echo $root;?>/images/portfolio_1.jpg" alt="portfolio1"></a>
                <div class="mask">
                  <h2>Lorem Ipsum</h2>
                  <p>design, marketing, public relations.</p>
                  <a href="portfolio-single.html" class="info">Learn More</a>
                </div>
              </div>  
          
              <div class="span3 view view-first">
                <a href="portfolio-single.html"><img src="<?php echo $root;?>/images/portfolio_4.jpg" alt="portfolio2"></a>
                <div class="mask">
                  <h2>Eiusmod Tempor</h2>
                  <p>research, consultation, human resources.</p>
                  <a href="portfolio-single.html" class="info">Learn More</a>
                </div>
              </div>  
          
              <div class="span3 view view-first">
                <a href="portfolio-single.html"><img src="<?php echo $root;?>/images/portfolio_3.jpg" alt="portfolio3"></a>
                <div class="mask">
                  <h2>Ullamco Laboris</h2>
                  <p>design, social media.</p>
                  <a href="portfolio-single.html" class="info">Learn More</a>
                </div>
              </div>  
            </div>
          </div>
          <!-- end portfolio --> 

          <div class="row">
            <div class="span10">
              <div class="section_title"><span class="section_title_text">GET IN TOUCH</span></div>
            </div>
          </div>
        
          <div class="row">
            <div class="span10">
              <div id="google_map">
                <iframe width="1170" height="370" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=900+Bagby+St+Houston,+TX+77002&amp;sll=33.687,-117.774252&amp;sspn=0.324522,0.682526&amp;t=m&amp;ie=UTF8&amp;hq=&amp;hnear=900+Bagby+St,+Houston,+Harris,+Texas+77002&amp;ll=29.761779,-95.370008&amp;spn=0.003725,0.012864&amp;z=17&amp;iwloc=A&amp;output=embed"></iframe><br />      
              </div>
            </div>
          </div>
        
          <div class="row">   
            <div class="span4">
              <h3>Company Creed </h3>
	          <ul class="accordion">
	            <li class="divider"><h2 class="accordion-head title-color gdl-title"><span class="accordion-head-image active"></span>Sed ut perspiciatis unde</h2>
	              <div class="accordion-content">
	                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
	              </div>
	            </li>
	            <li class="divider"><h2 class="accordion-head title-color gdl-title"><span class="accordion-head-image"></span>Temporibus autem quibusdam</h2>
	              <div class="accordion-content">
	                MLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
	              </div>
	            </li>
	            <li class="divider"><h2 class="accordion-head title-color gdl-title"><span class="accordion-head-image"></span>Nam libero tempore</h2>
	              <div class="accordion-content">
	                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
	              </div>
	            </li>
	          </ul>
            </div> 
          
            <div class="span2">
              <h3 class="our_details">Our Details</h3>
              <address>
              <strong>Lorem Ipsum, Inc.</strong><br>900 Bagby St<br>Houston, TX, 77002<br><abbr title="Phone">P:</abbr> (123) 456-7890
              </address>
              <p><a href="mailto:info@lorem.inc">info@lorem-inc.com</a><br /></p>
              <input type="text" class="subscribe_input" name="subject" value="Name" size="60" maxlength="64"><br>
	          <input type="text" class="subscribe_input" name="subject" value="Email" size="60" maxlength="64"><br>
	          <button class="btn btn-small" type="button">Subscribe</button>
            </div>
       
            <div class="span4">
	          <h3>Customer Testimonials</h3> 
	          <ul id="quotes">
                <li>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  - John Doe
                </li>
                <li>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  - Adam Smith
                </li>
                <li>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  - George Washington
                </li>
                <li>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                 - Shirley Temple
                </li>
              </ul>
            </div>
          </div>      
        
          <div class="row">
            <div class="span10">
              <div class="section_title"><span class="section_title_text">OUR CLIENTS</span></div>
            </div>
           </div>
        
          <div id="clients" class="row" >
            <div class="span2">
              <a href="#"><img src="<?php echo $root;?>/images/forest.png" alt="clients"></a>
            </div>  
            <div class="span2">
              <a href="#"><img src="<?php echo $root;?>/images/den.png" alt="clients"></a>
            </div>
            <div class="span2">
              <a href="#"><img src="<?php echo $root;?>/images/forest.png" alt="clients"></a>
            </div>
            <div class="span2">
              <a href="#"><img src="<?php echo $root;?>/images/canyon.png" alt="clients"></a>
            </div>
            <div class="span2">
              <a href="#"><img src="<?php echo $root;?>/images/jungle.png" alt="clients"></a>
            </div>
          </div>
          
        </div>
      </div>       
    </div>
    <!-- end main body container -->  
<?php }
?>