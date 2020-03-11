<?php
/*
Template Name: Materiais
*/

?>
<?php get_header()?>

<div class="row">
<div class=" col-md-4 containerImg">
  <img src="<?php echo get_template_directory_uri(); ?>/images/granito.jpg" alt="Avatar" class="image">
  <div class="overlay">
  <div class="text"><button type="button" class="btn btn-dark text">Granitos</button></div>
  
  </div>
</div>
<div class=" col-md-4 containerImg">
  <img src="<?php echo get_template_directory_uri(); ?>/images/marmore.jpg" alt="Avatar" class="image">
  <div class="overlay">
  <div class="text"><button type="button" class="btn btn-dark text">Marmores</button></div>
  
  </div>
</div>
<div class=" col-md-4 containerImg">
  <img src="<?php echo get_template_directory_uri(); ?>/images/quartzo.jpg" alt="Avatar" class="image">
  <div class="overlay">
  <div class="text"><button type="button" class="btn btn-dark text">Quartzos</button></div>
  
  </div>
</div>
</div>

<?php get_footer()?>
<style>
.containerImg {
    
  position: relative;
  width: 50%;
}

.image {
  display: block;
  width: 100%;
  height: 80%;
}

.overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: #222a;
  overflow: hidden;
  width: 100%;
  height: 0;
  transition: .5s ease;
}

.containerImg:hover .overlay {
  height: 100%;
}
.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}

</style>

