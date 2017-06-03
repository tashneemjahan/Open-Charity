<?php

?>


<div class="wrap">

  <div class="user-menu-wrapper">
    <div class="full-wrap">
      <?php //print render($page['user_menu']) ?>
    </div>
  </div>

</div>

<!-- new header -->
<div class="nav_header">
<?php if ($logo): ?>
  <div id="logo">
         <a href="/drupal/node/3" ><img src="<?php print $logo; ?>"/></a>
      </div>
      <?php endif; ?>
      <div class="menu_new">
          <div class="menu-wrap">
    <div class="full-wrap clearfix">
      <nav id="main-menu"  role="navigation">
        <a class="nav-toggle" href="#">Navigation</a>
        <div class="menu-navigation-container">
          <?php $main_menu_tree = menu_tree(variable_get('menu_main_links_source', 'main-menu')); 
            print drupal_render($main_menu_tree);
          ?>
        </div>
        <div class="clear"></div>
      </nav>
    </div>
  </div>
          </div>
      <div class="join_btn"><P class="join_text">JOIN US</P></div>
</div>

<!-- end header -->


<div class="wrap">
 
              <?php print render($page['content']); ?>
            <!-- /#main -->
          
</div>

  <div id="footer">
    

    <div class="wrap">

      <!-- Social Links -->
      <?php if (theme_get_setting('social_links', 'Open_Charity')): ?>
        <div class="social-icons">
         <ul>
          <li><a class="fb" href="<?php echo theme_get_setting('facebook_profile_url', 'Open_Charity'); ?>" target="_blank" rel="me"><i class="fa fa-facebook"></i></a></li>
          <li><a class="twitter" href="<?php echo theme_get_setting('twitter_profile_url', 'Open_Charity'); ?>" target="_blank" rel="me"><i class="fa fa-twitter"></i></a></li>
          <li><a class="gplus" href="<?php echo theme_get_setting('gplus_profile_url', 'Open_Charity'); ?>" target="_blank" rel="me"><i class="fa fa-google-plus"></i></a></li>
          </ul>
        </div>
      <?php endif; ?>
        </br>
        <hr class="hr_line">
        </br> 
      <div id="footer-wrap">
        <p class="copyright">
          This site was built as a collaboraion between <span class="footer_text_span">Manifesto Digital</span> and <span class="footer_text_span">Compucorp</span>
        </p>
        
        <div class="clear"></div>
      </div>

  </div>

<!-- Footer -->

 

    
 
<!-- 
<div class="half-circle"></div>
end Footer -->