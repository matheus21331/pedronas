<?php

?>

<div class="fundo row">

        <div class="col-md-6 image">
            <img  class="img-fluid image-left" alt="Responsive image" src = "wp-content\themes\pedra-vidros\images\ambientes.jpg">
            <div onclick = "ambFunc()"class="middle">
                <div class="text">Ambientes</div>
            </div>
            </div>
            <div class="col-md-6 image">
            <img class="img-fluid image-right" alt="Responsive image" src = "wp-content\themes\pedra-vidros\images\Cozinha.jpg">
                        <div onclick = "colFun()" class="middle">
                <div class="text">Colecoes</div>
            </div>
            </div>
        

 </div>
<script>
function colFun(){
    window.alert("ba");
}


</script>
<style>
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
  font-size: 35px;
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










