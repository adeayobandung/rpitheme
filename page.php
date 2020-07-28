<?php
	get_header();
?>
  

  <main>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="content-slice-page mt-5" id="order">
    	<div class="container">
    		<h2 class="mt-5" style="color:#FFC107;"><?php the_title(); ?></h2>
    		<p class="m-0 p-0" style="font-size:1em;color:#ACACAC;">Oleh: <?php the_author(); ?> | Tanggal : <?php the_date(); ?></p>
    	</div>
    </div>
      
    <div class="container mt-2 pt-2 mb-4" style="">
      <article class="article-full">
      	
        <?php the_content(); ?>
        
        <?php endwhile; else : ?>
            <p>Maaf, tidak ada posting yang ditemukan!</p>
        <?php endif; ?>
      </article>
      
    </div>
    
    
  </main>

<?php
	get_footer();