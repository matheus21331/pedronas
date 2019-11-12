<footer class="main-footer" id="footer">
    <div class="container">
        <div class="box-title">
            <p class="text-right h3">
                Contato
            </p>
        </div>
        <div class="box-title">
            <i class="fas fa-envelope"></i>
            <a href="mailto:rspedrasemarmores@gmail.com" class="h6 text-right" id="email">
                rspedrasemarmores@gmail.com
            </a>
            
        </div>
        <div class="box-title">
            <i class="fas fa-phone" id="icone"></i>
            <a href="tel:518586-5208" class="h6 text-right"id="phone">
            51 8586-5208
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
        margin-right:5px;
        float:right;
    }
    .h6,.h4{
        border:1px solid black;
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
</style>