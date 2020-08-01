<?php
	get_header();
?>
  

  <main>
    <div class="container">
      <!-- carousel -->
      <div class="row">
        <div class="col-lg">

          <div id="carouselExampleIndicators" class="carousel slide mt-4 shadow-sm" data-ride="carousel">
            <ol class="carousel-indicators">
              <?php $no = 1; ?>
              <?php if ( $blog_query->have_posts() ) : while ( $blog_query->have_posts() ) : $blog_query->the_post(); ?>
                <?php if($no == 1) : ?>
                  <li data-target="#carouselExampleIndicators" data-slide-to="<?php $no; ?>" class="active"></li>
                <?php else : ?>
                  <li data-target="#carouselExampleIndicators" data-slide-to="<?php $no; ?>"></li>
                <?php endif; ?>
                <?php $no++; ?>
              <?php endwhile; ?>
              <?php endif; ?>
            </ol>
            <div class="carousel-inner">
              <?php
                  $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
                $args = array( 'post_type' => 'slider','posts_per_page' => get_option('posts_per_page'),'paged' => $paged );
                $blog_query = new WP_Query( $args );
                $i = 1;
              ?>
              <?php if ( $blog_query->have_posts() ) : while ( $blog_query->have_posts() ) : $blog_query->the_post(); ?>
                <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'single-thumb'); ?>

                <?php if($no == 1) : ?>
                  <div class="carousel-item active">
                    <div class="carousel-item-img">
                      <img src="<?php echo $image[0]; ?>" class="d-block w-100" alt="<?php the_title(); ?>">
                    </div>
                  </div>
                <?php else : ?>
                  <div class="carousel-item">
                    <div class="carousel-item-img">
                      <img src="<?php echo $image[0]; ?>" class="d-block w-100" alt="<?php the_title(); ?>">
                    </div>
                  </div>
                <?php endif; ?>
              
              <?php $i++; ?>
              <?php endwhile; ?>
              <?php endif; ?>
            </div>
            <a class="carousel-control-prev shadow" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next shadow" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

        </div>
      </div>
    </div>
    <!-- end carousel -->

    <div class="content-slice mt-3">
      <div class="container">

        <div class="content-slice-item animatedParent">
          <div class="row">
            <div class="col-lg-8">

              <h2 class="pt-3 animated bounceInDown">Siapa Kami?</h2>
              <p class="animated bounceInDown">Rumah Produktif Indonesia adalah wadah berkumpulnya manusia Indonesia dari berbagai latar belakang untuk berkolaborasi dalam berbagai aktivitas positif dan produktif yang berdampak pada pengembangan diri, komunitas, dan bangsa Indonesia.</p>

            </div>
            <div class="col-lg-4">
              <img src="<?php echo get_template_directory_uri(); ?>/images/logo-rpi.png" class="float-right shaddow animated bounceInUp" alt="">
            </div>
          </div>

        </div>

      </div>
    </div>

    <div class="container animatedParent animateOnce" style="overflow:hidden;min-height:360px;">
      <div class="row justify-content-md-center">
        <div class="col-lg-6">
          <h2 class="pt-3 title-service animated bounceInDown" style="color:#20434E;">Visi</h2>
          <p class="animated bounceInDown">Menciptakan Manusia Indonesia yang produktif dalam berbagai bidang berbasis pada masyarakat berjejaring.</p>
        </div>
        <div class="col-lg-4">
          <img src="<?php echo get_template_directory_uri(); ?>/images/Visi-Icon.gif" class="animated bounceInDown" width="250" alt="">
        </div>
      </div>
      <div class="row justify-content-md-center">
        <div class="col-lg-4">
          <img src="<?php echo get_template_directory_uri(); ?>/images/Misi-Icon.gif" class="animated bounceInDown" width="250" alt="">
        </div>
        <div class="col-lg-6">
          <h2 class="pt-3 title-service text-success animated bounceInRight">Misi</h2>
          <ol class="animated bounceInRight">
            <li>Wadah berkumpulnya manusia Indonesia untuk belajar dan berbagi kepada sesama</li>
            <li >Inisiasi berbagai kegiatan positif untuk menciptakan manusia Indonaesia produktif</li>
            <li>Bermitra dengan berbagai partner untuk menuju manusia Indonesia produktif</li>
          </ol>
        </div>
      </div>

    </div>

    <div class="content-slice-president animatedParent animateOnce mt-5" id="order">
      <div class="container">

        <div class="content-slice-item">
          <div class="row">
            <div class="col-lg-8">
              <h2 class="pt-3 animated bounceInDown" style="color:#FFC107;">Message from The President</h2>
              <p class="text-white animated bounceInDown">Rumah Produktif Indonesia lahir minggu kedua pandemi covid-19 melanda negeri kita tercinta. Awalnya, wadah ini sekedar tempat diskusi dan saling menguatkan, akan tetapi seiring dengan perkembangan dirasakan penting untuk menjadikan inisiatif ini menjadi komunitas besar dengan struktur dan kegiatan yang terukur.
                
              </p>
              <a href="https://rpi.or.id/index.php/message-from-president-rpi/" class="btn btn-success btn-lg">SELENGKAPNYA</a>
            </div>
            <div class="col-lg-4">
              <img src="<?php echo get_template_directory_uri(); ?>/images/president.png" class="rounded-circle float-right shadow" width="100" alt="">
              <p class="text-right pb-0 mb-0" style="color:white;font-weight:bold;">Yanuardi Syukur</p>
              <p class="text-right pt-0 mt-0" style="color:#ACACAC;font-style:italic;">Presiden Rumah Produktif Indonesia</p>
            </div>
          </div>

        </div>

      </div>
    </div>



    <div class="container mt-4 mb-4" style="">
    	<h2 class="text-center mb-3">Berita & Artikel</h2>
      <div class="row">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="col-lg-3 m-0 p-2">
          <div class="card shadow border-0 rounded-lg" style="min-height: 390px;">
            <div style="max-height:150px;overflow: hidden;">
              <!-- <img src="<?php echo get_template_directory_uri(); ?>/images/imagenotfound.png" class="card-img-top" alt="..."> -->

              <?php echo the_post_thumbnail(array(290)); ?>
            </div>
          
          <div class="card-body d-flex flex-column">
            <h5 class="card-title mb-0 pb-0" style="font-size: 1.1em;" title="<?php the_title_attribute(); 
?>"><?php the_title(); ?></h5>
            <p class="m-0 p-0" style="font-size:0.7em;color:#ACACAC;"><?php the_author(); ?> | <?php echo get_the_date(); ?></p>
            <hr class="mb-2 mt-0 p-0">
            <div class="excerpt">
              <?php the_excerpt(); ?>
            </div>
            <a href="<?php the_permalink(); ?>" class="btn btn-info btn-sm mt-auto">SELENGKAPNYA</a>
          </div>
        </div>
        </div>
      <?php endwhile; else : ?>
          <p>Maaf, tidak ada posting yang ditemukan!</p>
      <?php endif; ?>
	    

	    </div>

    </div>

  </main>

<?php
	get_footer();