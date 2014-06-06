<footer class="content-info" role="contentinfo">
  <div class="footerCallToAction">
  	<div class="container">
	  	<h2>Take the next step in making your website the best it can be.</h2>
	  	<form class="form-inline" role="form">
	        <div class="form-group">
	           <label class="sr-only" for="exampleInputEmail2">Email address</label>
	           <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
	        </div>
	        <button type="submit" class="btn ctaButton">Get Quote</button>
	    </form>
	 </div>
  </div>
  <div class="footerMeetsCTA">
  </div>
  <div class="mainFooter">
  	<div class="container">
  		<img class="footerLogo" src="wp-content/themes/heyellieday/assets/img/logo.png">

	    <nav class="collapse navbar-collapse" role="navigation">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
          endif;
        ?>
      </nav>
	</div>
  </div>
</footer>

<?php wp_footer(); ?>
