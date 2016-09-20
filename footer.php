<?php ?>
<footer class="footer">
<div class="row">
<div class="wrapper">

		<div class="small-12 medium-6 large-3 columns">		
   		<div class="col span_3 fmenu">
		<?php wp_nav_menu( array( 'theme_location' => 'footerone', 'menu_class' => 'footerfirst' ) ); ?>
      	</div> 
      	</div> 

		<div class="small-12 medium-6 large-3 columns">
   		<div class="col span_3 fmenu">
		<?php wp_nav_menu( array( 'theme_location' => 'footertwo', 'menu_class' => 'footersecond' ) ); ?>
      	</div>
      	</div> 

		<div class="small-12 medium-6 large-3 columns">      
        <div class="col span_3">
             <h1>Talent Match  </a></h1>
            <h2>Staffordshire</h2> 
        </div>
      	</div> 

		<div class="small-12 medium-6 large-3 columns">
        <div class="col span_3">
            <h3>Registered Office</h3>
            <address>Mansell House<br/>
22 Bore Street<br/>
                Lichfield<br/>
                Staffordshire<br/>
                WS13 6LL
            </address>
            <li><span>tel: </span> 01543 301 140</li>
            <li><span>email: </span>tms@talentmatchstaffs.org.uk</li>
            <li>Charity Registration No: 1067354</li>
            <li>VAT Reg No: 714 9278 17</li>          
        </div>
      	</div> 
</div>
</div>


<div class="footer-bottom col span_12">
		<div class="row">	
    	<div class="wrapper">

        	<div class="col span_6">&copy; <?php echo date('Y'); ?> Talent Match Staffordshire. All rights reserved.  <a href="terms-conditionsprivacy">  Terms & Conditions </a></div>
        	<div class="col span_6"> <a href="https://www.cocoonfxmedia.co.uk/web-design/lichfield" rel="nofollow">Website Designed by Cocoonfxmedia Ltd</a></div>
    	</div>
		</div>
</div>

</footer>

<!-- menu script -->
<script>
$(document).ready(function(){
$( 'a.menuBtn').on( 'click' , function(){
$( 'nav.mainnav ul' ).toggle( 'slow' );
return false;
});
});
</script>
	
<?php wp_footer(); ?>      
</body>
</html>