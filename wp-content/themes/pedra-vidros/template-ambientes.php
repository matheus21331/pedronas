<?php
/*
Template Name: Ambientes
*/
get_header();


?>

<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Thumb">
  <div class="card-body">
    <h5 class="card-title">Titulo Pasta</h5>
    <p class="card-text">Descricao breve da pasta.</p>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Open modal
  </button>  </div>
</div>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <?php
  get_footer();
  
  ?>
<style>
.card{
    margin:20px;
}
</style>
