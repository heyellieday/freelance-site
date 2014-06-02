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
	    <?php dynamic_sidebar('sidebar-footer'); ?>
	    <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
	</div>
  </div>
</footer>

<?php wp_footer(); ?>
