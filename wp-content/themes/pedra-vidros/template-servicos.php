
<div class="container">
    <div class="row">
        <div class="col-md-6 image">
            <div  class="bg-service" alt="Responsive image" style ="background-image: url('wp-content/themes/pedra-vidros/images/ambientes.jpg')">
                <a href="#" class="text">Ambientes</a>
            </div>
        </div>
        <div class="col-md-6 image">
            <div  class="bg-service" alt="Responsive image" style ="background-image: url('wp-content/themes/pedra-vidros/images/cozinha.jpg')">]
                <a href="#" class="text">Coleções</a>
            </div>
        </div>
    </div>  
</div>


<style>
.bg-service {
    height: 500px;
    background-size: cover;
    background-position: center;
    display: flex;
    justify-content: center;
    align-items: center;
}
.image-left {
    opacity: 1;
    display: block;
    width: 100%;
    height: auto;
    transition: .5s ease;
    backface-visibility: hidden;
}
.image-right {
    opacity: 1;
    display: block;
    width: 100%;
    height: auto;
    transition: .5s ease;
    backface-visibility: hidden;
}
.middle {
    transition: .5s ease;
    opacity: 0;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%)
}
.text {
    width:50%;
    text-align:center;
    background-color: red;
    color: white;
    font-size: 16px;
    padding: 16px 32px;
}

.image:hover .image-left {
    opacity: 0.3;
}
.image:hover .image-right {
    opacity: 0.3;
}
.image:hover .middle {
    opacity: 1;
}
.image{
    text-align:center;
    position: relative;
    width: 50%;
}


</style>










