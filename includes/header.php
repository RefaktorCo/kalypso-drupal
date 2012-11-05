<?php 
function kalypso_header($page){
  global $root; 
?>

 <div class="container">
      <div class="row">  
        <div class="span2"> 
          <div id="vert_nav">
            <a href="index.html">
            <div id="main_title">
              <h1 id="main_title_text">Kalypso</h1>
            </div>
            </a>
            <!-- begin menu -->
            <div id="menu" >
              <div class="navbar">
	            <div class="navbar-wrap">       
                  <ul id="jMenu">
				    <li><a class="fNiv active" href="index.html">Home</a></li>
				
			  	    <li><a class="fNiv">Sliders <i class="icon-arrow-right"></i></a>
					  <ul>
					    <li><a href="index.html">Elastic Image Slideshow</a></li>
				        <li><a href="nivo-slider.html">NivoSlider</a></li>
					    <li><a href="bootstrap-carousel.html">Bootstrap Carousel</a></li>
					    <li><a href="css3-paralax.html">CSS3 Paralax</a></li>
					  </ul>
				    </li>
			
				    <li><a class="fNiv">Features  <i class="icon-arrow-right"></i></a>
					  <ul>
					    <li><a href="elements.html">Elements</a></li>
					    <li><a href="typography.html">Typography</a></li>
					    <li><a href="author.html">Author Page</a></li>
					    <li><a href="faq.html">FAQ</a></li>
					    <li><a href="404.html">404 Template</a></li>
					    <li><a href="pricing.html">Pricing</a></li>
					    <li><a>Third Level</a>
				          <ul>
						    <li><a>Link 1</a></li>
						    <li><a>Link 2</a></li>
						    <li><a>Link 3</a></li>
						  </ul>
				        </li>  
					  </ul>
				    </li>
					
				    <li><a class="fNiv" href="blog.html">Blog <i class="icon-arrow-right"></i></a>
				      <ul>
				        <li><a href="blog-single.html">Single Post</a></li>
				        <li><a href="blog.html">Multi Post</a></li>
				        <li><a href="blog-full.html">Full Width</a></li>
				      </ul>
			        </li>    
				
				    <li><a class="fNiv" href="portfolio.html">Portfolio  <i class="icon-arrow-right"></i></a>
				      <ul>
				        <li><a href="portfolio-single.html">Single Item</a></li>
				        <li><a href="portfolio-two.html">2 Column</a></li>
					    <li><a href="portfolio-three.html">3 Column</a></li>
				      </ul>
				    </li>
			
				    <li><a class="fNiv" href="contact.html">Contact</a></li>
                  </ul>	          
                </div>
              </div> 
            </div>
            <!-- end menu -->       
          </div>
        </div>
        <!-- end main span2 -->  
  
<script type="text/javascript">
jQuery(document).ready(function ($) {
	
$('#ei-slider').eislideshow({
		animation			: 'center',
		autoplay			: true,
		slideshow_interval	: 3000,
		titlesFactor		: 0
      });
    
      $().UItoTop({ easingType: 'easeOutQuart' });
    
      $("#jMenu").jMenu();
    
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

</script>
<?php }
?>