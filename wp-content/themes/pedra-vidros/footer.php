<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
            <footer id="footer">
                <div class="container-fluid float-right">
                    <div class="container">
                        <p class="text-right h3">
                            Contato
                        </p>
                    </div>
                    <div class="container">
                        <p class="h6 text-right" id="email">
                            rspedrasemarmores@gmail.com
                        </p>
                        <i class="fas fa-envelope" id = ""></i>
                    </div>
                    <div class="container">
                        <p class="h6 text-right"id="phone">
                        51 8586-5208
                        </p>
                        <i class="fas fa-phone" id="icone"></i>
                    </div>
                </div>
            </footer>
    <?php wp_footer(); ?>
</body>
</html>


<style>

.container{
    text-align:center;
}
#phone{
    float:right;
}
#icone{
    margin-right:5px;
    float:right;
}
.h6,.h4{
    border:1px solid black;
}
.container-fluid{
    width:100%;
    color:white;
    background-color: #BB1010FF;
}

</style>