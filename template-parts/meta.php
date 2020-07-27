<!-- Required meta tags -->
<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://www.rozaka.com/" rel="canonical" />

<meta name="description" content="<?php if ( is_single() ) {
    trim(strip_tags(the_excerpt()));
  } else {
      bloginfo('name'); echo " - "; bloginfo('description');
  }
  ?>" />
<meta content="Bergembira, Belajar, Berkawan" name="keywords" />
<meta content="RPI" itemprop="name" />
<meta content="<?php if ( is_single() ) {
      single_post_title('', true); 
  } else {
      bloginfo('name'); echo " - "; bloginfo('description');
  }
  ?>" itemprop="description" />
<meta content="images/logo-long.png" itemprop="image" />
<meta content="<?php if ( is_single() ) {
      single_post_title('', true); 
  } else {
      bloginfo('name'); echo " - "; bloginfo('description');
  }
  ?>" name="twitter:title" />
<meta content="<?php if ( is_single() ) {
      single_post_title('', true); 
  } else {
      bloginfo('name'); echo " - "; bloginfo('description');
  }
  ?>" name="twitter:description" />
<meta content="images/logo-rpi.png" name="twitter:image:src" />
<meta content="summary_large_image" name="twitter:card" />
<meta content="<?php if ( is_single() ) {
      single_post_title('', true); 
  } else {
      bloginfo('name'); echo " - "; bloginfo('description');
  }
  ?>" property="og:title" />
<meta content="images/logo-rpi.png" property="og:image" />
<meta property="og:description" content="<?php if ( is_single() ) {
      strip_tags(the_excerpt());
  } else {
      bloginfo('name'); echo " - "; bloginfo('description');
  }
  ?>" />