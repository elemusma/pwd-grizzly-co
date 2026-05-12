<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php 
    echo codeHeader(); 
    wp_head(); 
  ?>
</head>
<body <?php body_class(); ?>>

  <?php echo codeBody(); ?>

  <!-- <div class="blank-space" style=""></div> -->

  <header class="header-nav position-fixed w-100" style="top:0;left:0;z-index:10;">
    <div class="bg-white position-absolute w-100" style="top:0;left:0;height:65%;"></div>
    <div class="nav" style="">
      <div class="container">
        <div class="row justify-content-end align-items-center">

          <div class="col-md-4 col-5 text-center" style="">
            <!-- <div class="bg-white box-shadow" style=""> -->
            <a href="<?php echo home_url(); ?>/" title="<?php echo get_bloginfo( 'name' ) . ' - ' . get_bloginfo( 'description' ); ?>" class="">
              <div id="logoMain" style="min-width:100px;width:145px;transition:all .25s ease-in-out;margin:auto;">
                <div style="pointer-events:none;">
                  <?php 
                  if (logoImg()) {
echo wp_get_attachment_image(logoImg()['id'], 'full','',array(
	'class'=>'w-100 h-auto skip-lazy',
	'style'=>''
));
                  } else {
                    echo logoSVG(); 
                    }
                  ?>
                </div>
              </div>
            </a>
            <!-- </div> -->
          </div>

          <div class="col-md-4 col-7 text-right" style="margin-top:-35px;">
			  <div class="" style="border-radius:25px;">
          <div class="bg-white br-25" style="display:inline-grid;">
            
		<a class="small br-25 justify-content-end align-items-baseline phone text-black h3" style="font-size:23px;padding-left:25px;padding-right:25px;padding-top:7px;" role="button" href="tel:+1<?php echo globalPhone(); ?>" style="" target="" id=""><svg fill="black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="height:17px;width:17px;margin-right:10px;"><path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/></svg> <?php echo globalPhone(); ?></a>
    <div><a href="#quote" class="bold text-black" style="padding-right:25px;">Contact Us</a></div>
    </div>
			  </div>
          </div>


        </div> <!-- end of row -->
      </div>
    </div>
  </header>