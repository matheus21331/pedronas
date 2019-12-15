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
            <a href="tel:518586-5208" class="h6 text-right"id="phone">
            (51) 8586-5208
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
        background-color: #BB1010FF;
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

    .carousel{
        background-image:url("wp-content\themes\pedra-vidros\images\IMG-20190626-WA0047.jpg")
    }

    
</style>