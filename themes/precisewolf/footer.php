<footer>

<?php

echo '<section class="" style="padding-top:50px;padding-bottom:25px;">';

echo '<div class="container">';
echo '<div class="row">';

echo '<div class="col-12 text-center" data-aos="fade-up" data-aos-delay="200">';
echo '<a href="' . home_url() . '" title="Homepage link for ' . get_bloginfo('name') . ' - ' . get_bloginfo('description') . '">';
echo '<div style="" id="logoMain">';
echo '<div style="pointer-events:none;">';

if (logoImg()) {
echo wp_get_attachment_image(1123, 'full','',array(
'class'=>'w-100 h-auto skip-lazy',
'style'=>'max-width:250px;'
));
} else {
echo logoSVG();
}

echo '</div>';
echo '</div>';
echo '</a>';


echo '</div>'; // <!-- end of first column -->
?>

</div>
</div>
</section>

<section class="bg-accent-tertiary text-white" style="padding:15px 0px;">
  <div class="container">
    <div class="row justify-content-end align-items-center" style="">
      <div class="col-lg-6 text-center" style="">
  <p style="margin-bottom:0px;" class="">Copyright &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All Rights Reserved.<br><a href="mailto:<?php echo emailAddress(); ?>" title="email address link for <?php echo get_bloginfo('name'); ?> - <?php echo get_bloginfo('description'); ?>" class="text-accent-secondary"><?php echo emailAddress(); ?></a></p>

</div>

<div class="col-lg-3 text-lg-right text-center">
  <a href="https://buildupuniversity.com/" title="Built by BuildUp University" rel="noopener noreferrer external" target="_blank" class="text-white">
  <?php 
echo wp_get_attachment_image(1220, 'full','',array(
'class'=>'w-100 h-auto skip-lazy',
'style'=>'max-width:90px;'
));
  ?>
  </a>
</div>

    </div>
  </div>
</section>


<!-- The first Modal -->
<div id="mobileMenu" class="modal-custom mobile-menu" style="opacity:0;pointer-events:none;">

<!-- Modal content -->
<div class="modal-content-menu modal-content-custom bg-white" style="padding: 50px 15px 100px;
    margin-top: 0;
    margin-left: 0;
    margin-bottom: 0;
    border-left: 0;
    border-bottom: 0;
    border-bottom-left-radius: 0;
    border-top-left-radius: 0;
    height: 100vh;">
<span class="close-custom" id="navMenuClose">&times;</span>
	<?php

echo '<div style="width:100%;max-width:165px;" id="logoMain">';
echo '<a href="' . home_url() . '" title="Homepage link for ' . get_bloginfo('name') . ' - ' . get_bloginfo('description') . '">';

if (logoImg()) {
echo wp_get_attachment_image(logoImg()['id'], 'full','',array(
'class'=>'w-100 h-auto skip-lazy',
'style'=>''
));
} else {
echo logoSVG(); 
}

echo '</a>';
echo '</div>';

wp_nav_menu(array(
    'menu' => 'primary',
    'menu_class'=>'menu list-unstyled mb-0'
));

?>
<div class="">
<?php
echo do_shortcode('[global_cta]');
?>
</div>

<?php

echo get_template_part('partials/si');

?>

<?php
echo '</div>';
echo '</div>';
// end of mobile nav menu


echo '</footer>';


echo codeFooter();
// if(get_field('footer', 'options')) { the_field('footer', 'options'); }
// if(get_field('footer_code')) { the_field('footer_code'); }

?>

<style>
label.screen-reader-text {
    display: none;
}
#searchform input#searchsubmit {
    width: 332px;
}

#searchform input#s {
    width: 300px;
}</style>


<?php

wp_footer();

echo '</body>';
echo '</html>';
?>