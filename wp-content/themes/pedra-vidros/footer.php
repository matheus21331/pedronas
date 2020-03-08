<footer class="main-footer" id="footer">
    <div class="container">
        <div class="box-title">
            <p class="text-right h3">
                Contato
            </p>
        </div>
        <div class="box-title">
            <i class="fas fa-envelope" id = "icone"></i>
            <a href="mailto:rspedrasemarmores@gmail.com" class="h6 text-right" id="email">
                rspedrasemarmores@gmail.com
            </a>
            
        </div>
        <div class="box-title">
            <i class="fas fa-phone" id="icone"></i>
            <a href="tel:5198586-5208" class="h6 text-right"id="phone">
            (51) 98586-5208
            </a>
        </div>
        <div class="box-title">
        <a href="http://www.facebook.com/naoseiofacebookdeles" target="_blank">
            <i class="fab fa-facebook-f"></i>
            </a>
            <a href="http://www.facebook.com/naoseiofacebookdeles" target = "_blank">
            <i class="fab fa-instagram"></i>
            </a>
        </div>
    </div>
</footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/slick-1.8.1/slick-1.8.1/slick/slick.min.js"></script>
<script>
    (function($) {
        $('.modal-slider-start').slick();
    })(jQuery);
</script>
<?php wp_footer(); ?>

</body>
</html>

<style>
    .box-title{
        display: flex;
        justify-content: flex-end; 
    }
    #icone{
        margin-top:3px;
        margin-right:5px;
        float:right;
    }
    .h6,.h4{
    }
    .main-footer{
        width:100%;
        color:white;
        background-color: #222;
    }
    a:hover {
        text-decoration: none;
        color: white;
    }

    .fa-facebook-f{
        font-size:30px;
        margin-right:10px;
        transition:0.2s;
    }

    .fa-facebook-f:hover{
        color:#3b5998;
    }

    .fa-instagram{
        font-size:30px;
        margin-left:10px;
    }
    
    .img-carousel {
        background-image:url("wp-content/themes/pedra-vidros/images/IMG-20190626-WA0047.jpg");
        height:400px;
        margin:10px 5px 10px 5px;
        background-size:100%  100%;
        background-repeat:no-repeat;
    }     
</style>