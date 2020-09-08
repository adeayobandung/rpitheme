
<!--footer starts from here-->
<footer class="footer">
<div class="container bottom_border">
<div class="row">
<div class=" col-sm-4 col-md col-sm-4  col-12 col">
<h5 class="headin5_amrc col_white_amrc pt2"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-rpi.png" width="200px"></h5>
<!--headin5_amrc-->
<p class="mb10">Rumah Produktif Indonesia lahir minggu kedua pandemi covid-19 melanda negeri kita tercinta.</p>
<p><i class="fa fa-phone"></i>  +62 813-4240-4140  </p>
<p><i class="fa fa fa-envelope"></i> info@rpi.or.id  </p>
</div>


<div class=" col-sm-4 col-md  col-6 col">
<h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
<!--headin5_amrc-->
<ul class="footer_ul_amrc">
<li><a href="#">Sejaran</a></li>
<li><a href="#">Visi Misi</a></li>
<li><a href="#">Program Kerja</a></li>
<li><a href="#">Pengurus</a></li>
<li><a href="#">Message From Presiden</a></li>
</ul>
<!--footer_ul_amrc ends here-->
</div>

<div class=" col-sm-4 col-md  col-6 col">
<h5 class="headin5_amrc col_white_amrc pt2">Legal</h5>
<!--headin5_amrc-->
<ul class="footer_ul_amrc">
<li><a href="#">Privacy Policy</a></li>
<li><a href="#">Terms & Conditions</a></li>
<li><a href="#">Cookies Policy</a></li>
</ul>
<!--footer_ul_amrc ends here-->
</div>


<div class=" col-sm-4 col-md  col-6 col">
<h5 class="headin5_amrc col_white_amrc pt2">Brands</h5>
<!--headin5_amrc-->
<ul class="footer_ul_amrc">
<li><a href="#"><img src="https://www.hello-prospect.com/wp-content/uploads/2019/07/White-logo.png" width="150px"></a></li><br>
<li><a href="#"><img src="https://www.hello-prospect.com/wp-content/uploads/2018/11/hp_new_logo.png" width="150px"></a></a></li><br>
<li><a href="#"><img src="https://www.hello-prospect.com/wp-content/uploads/2020/01/Tmb_logo_Final.png" width="150px"></a></li>
</ul>
<!--footer_ul_amrc ends here-->
</div>


<div class=" col-sm-4 col-md  col-12 col">
<h5 class="headin5_amrc col_white_amrc pt2">Alamat Redaksi</h5>
<!--headin5_amrc ends here-->

<ul class="footer_ul_amrc">
<li><a href="#">Jalan Juragan Sinda IV No. 16 G Kukusan Beji Depok</p></li>
</ul>
<!--footer_ul2_amrc ends here-->
</div>
</div>
</div>


<div class="container">
<ul class="foote_bottom_ul_amrc">
<li><a href="#">Home</a></li>
<li><a href="#">Opini</a></li>
<li><a href="#">Berita</a></li>
<li><a href="#">Events</a></li>
<li><a href="#">About Us</a></li>
<li><a href="#">Contact Us</a></li>
</ul>
<!--foote_bottom_ul_amrc ends here-->
<p class="text-center">© 2020 RPI - Manager IT. All Rights Reserved.</p>

<ul class="social_footer_ul">
<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
<li><a href="#"><i class="fab fa-twitter"></i></a></li>
<li><a href="#"><i class="fab fa-linkedin"></i></a></li>
<li><a href="#"><i class="fab fa-instagram"></i></a></li>
</ul>
<!--social_footer_ul ends here-->
</div>

</footer>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src='<?php echo get_template_directory_uri(); ?>/plugin/animation/js/css3-animate-it.js'></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
  <script>
    $('.dropdown').hover(
        function() {
            $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn();
        },
        function() {
            $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut();
        }
    );

    $('.dropdown-menu').hover(
        function() {
            $(this).stop(true, true);
        },
        function() {
            $(this).stop(true, true).delay(200).fadeOut();
        }
    );

    $(document).ready(function() {
      $("#news-slider8").owlCarousel({
          items : 3,
          itemsDesktop:[1199,3],
          itemsDesktopSmall:[980,2],
          itemsMobile : [600,1],
          autoPlay:true
      });
    });
  </script>
</body>

</html>